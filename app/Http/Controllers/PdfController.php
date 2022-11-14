<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

// use public\images\karanganyarlogo;

class PDF_MC_Table extends FPDF
{
var $widths;
var $aligns;

var $B=0;
var $I=0;
var $U=0;
var $HREF='';
var $ALIGN='';

function SetWidths($w)
{
    //Set the array of column widths
    $this->widths=$w;
}

function SetAligns($a)
{
    //Set the array of column alignments
    $this->aligns=$a;
}

function Row($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h);
        //Print the text
        $this->MultiCell($w,5,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function CheckPageBreak($h)
{
    //If the height h would cause an overflow, add a new page immediately
    if($this->GetY()+$h>$this->PageBreakTrigger)
        $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}

function WriteHTML($html)
    {
        //HTML parser
        $html=str_replace("\n",' ',$html);
        $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
        foreach($a as $i=>$e)
        {
            if($i%2==0)
            {
                //Text
                if($this->HREF)
                    $this->PutLink($this->HREF,$e);
                elseif($this->ALIGN=='center')
                    $this->Cell(0,5,$e,0,1,'C');
                else
                    $this->Write(5,$e);
            }
            else
            {
                //Tag
                if($e[0]=='/')
                    $this->CloseTag(strtoupper(substr($e,1)));
                else
                {
                    //Extract properties
                    $a2=explode(' ',$e);
                    $tag=strtoupper(array_shift($a2));
                    $prop=array();
                    foreach($a2 as $v)
                    {
                        if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                            $prop[strtoupper($a3[1])]=$a3[2];
                    }
                    $this->OpenTag($tag,$prop);
                }
            }
        }
    }

    function OpenTag($tag,$prop)
    {
        //Opening tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,true);
        if($tag=='A')
            $this->HREF=$prop['HREF'];
        if($tag=='BR')
            $this->Ln(5);
        if($tag=='P')
            $this->ALIGN=$prop['ALIGN'];
        if($tag=='HR')
        {
            if( !empty($prop['WIDTH']) )
                $Width = $prop['WIDTH'];
            else
                $Width = $this->w - $this->lMargin-$this->rMargin;
            $this->Ln(2);
            $x = $this->GetX();
            $y = $this->GetY();
            $this->SetLineWidth(0.4);
            $this->Line($x,$y,$x+$Width,$y);
            $this->SetLineWidth(0.2);
            $this->Ln(2);
        }
    }

    function CloseTag($tag)
    {
        //Closing tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,false);
        if($tag=='A')
            $this->HREF='';
        if($tag=='P')
            $this->ALIGN='';
    }

    function SetStyle($tag,$enable)
    {
        //Modify style and select corresponding font
        $this->$tag+=($enable ? 1 : -1);
        $style='';
        foreach(array('B','I','U') as $s)
            if($this->$s>0)
                $style.=$s;
        $this->SetFont('',$style);
    }

    function PutLink($URL,$txt)
    {
        //Put a hyperlink
        $this->SetTextColor(0,0,255);
        $this->SetStyle('U',true);
        $this->Write(5,$txt,$URL);
        $this->SetStyle('U',false);
        $this->SetTextColor(0);
    }
}


class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new PDF_MC_Table();
    }

    // Surat Perintah Tugas
    public function index()
    {
        $this->fpdf->SetMargins(20, 7.5, 20);
        $this->fpdf->AddPage('P', array(210, 330));

        // Kop Surat
        // $this->fpdf->Image('karanganyarlogo.png', 10, 10, 20, 25);
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(0, 7, "PEMERINTAH KABUPATEN KARANGANYAR", 0, 1, "C");
        $this->fpdf->SetFont('Arial', 'B', 18);
        $this->fpdf->Cell(0, 7, "DINAS KOMUNIKASI DAN INFORMATIKA", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(0, 5, "Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590", 0, 1, "C");
        $this->fpdf->Cell(0, 5, "Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712", 0, 1, "C");

        // Garis Dua
        $this->fpdf->SetLineWidth(1);
        $this->fpdf->Line(10, 35, 205, 35);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(10, 36, 205, 36);
        $this->fpdf->Ln(7);

        // Surat Perintah Tugas
        $this->fpdf->SetFont('Arial', 'BU', 12);
        $this->fpdf->Cell(0, 7, "SURAT PERINTAH TUGAS", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(60, 7, "", 0, 0);
        $this->fpdf->Cell(0, 7, "Nomor :", 0, 0);
        $this->fpdf->Ln(15);

        // Dasar
        $this->fpdf->Cell(30, 5, 'Dasar', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->MultiCell(0, 5, 'Dokumen Pelaksanaan Anggaran (DPA) Dinas Komunikasi dan Informatika Kabupaten Karanganyar TA. 2022, Sub Kegiatan Pengembangan dan Pengelolaan Ekosistem Kabupaten/Kota Cerdas, dan Kota Cerdas No. Rekening : 2.16.03.2.02.09.5.1.02.04.01.0001', 0);
        $this->fpdf->Ln(10);

        // Memerintahkan
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(0, 5, "MEMERINTAHKAN :", 0, 1, "C");
        $this->fpdf->Ln(10);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(30, 5, 'Kepada', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0, "C");
        $this->fpdf->MultiCell(0, 5, 'Terlampir', 0, 0);
        $this->fpdf->Ln(10);

        $this->fpdf->Cell(30, 5, 'Untuk', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->MultiCell(0, 5, 'Mengikuti kunjungan kerja dalam rangka Sharing Knowledge Dan Evaluasi Pelaksanaan Indeks SPBE tahun 2022 di Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Bantul, serta Persiapan Pelaksanaan Penilaian Program Smartcity di Dinas Komunikasi, dan Informatika (Diskominfo) Kabupaten Gunung Kidul pada :', 0);
        $this->fpdf->Cell(35, 5, '', 0, 0);

        $this->fpdf->Cell(57, 5, 'Hari / Tanggal', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->Cell(0, 5, 'Senin - Selasa / 13 -14 Juni 2022', 0, 1);
        $this->fpdf->Cell(35, 5, '', 0, 0);

        $this->fpdf->Cell(57, 5, 'Waktu', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->Cell(0, 5, '07.30 WIB s/d selesai', 0, 1);
        $this->fpdf->Cell(35, 5, '', 0, 0);

        $this->fpdf->Cell(57, 5, 'Tempat', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->MultiCell(0, 5, 'Diskominfo Kabupaten Bantul dan Diskominfo Kabupaten Gunung Kidul', 0);
        $this->fpdf->Ln(5);

        // Dengan Ketentuan
        $this->fpdf->Cell(0, 5, 'Dengan ketentuan : ', 0, 1);
        $this->fpdf->MultiCell(0, 5, 'Setelah selesai melaksanakan tugas segera melaporkan hasil pelaksanaan tugas kepada atasan.', 0);
        $this->fpdf->Ln(5);

        $this->fpdf->Cell(0, 5, "Demikian untuk dilaksanakan sebagaimana mestinya.", 0, 1, "C");
        $this->fpdf->Ln(20);

        // Tanda Tangan
        $this->fpdf->Cell(75, 5, '', 0, 0);
        $this->fpdf->Cell(27, 5, 'Ditetapkan di', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->Cell(0, 5, 'Karanganyar', 0, 1);

        $this->fpdf->Cell(75, 5, '', 0, 0);
        $this->fpdf->Cell(27, 5, 'Pada tanggal', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->Cell(0, 5, '10 Juni 2022', 0, 1);
        $this->fpdf->Ln(5);

        $this->fpdf->Cell(75, 5, '', 0, 0);
        $this->fpdf->MultiCell(0, 5, 'KEPALA DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN KARANGANYAR', 0, 0);
        $this->fpdf->Ln(25);

        $this->fpdf->Cell(75, 5, '', 0, 0);
        $this->fpdf->SetFont('Arial', 'BU', 12);
        $this->fpdf->Cell(0, 5, 'Drs. SUJARNO, M.Si.', 0, 1);

        $this->fpdf->Cell(75, 5, '', 0, 0);
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(0, 5, 'Pembina Utama Muda', 0, 1);

        $this->fpdf->Cell(75, 5, '', 0, 0);
        $this->fpdf->Cell(0, 5, 'NIP. 19630107 199003 1 004', 0, 0);

        $this->fpdf->Output('I', 'SPT.pdf');

        exit;
    }

    // Surat Permintaan Perjalanan Dinas
    public function pdf2()
    {
        $this->fpdf->SetMargins(20, 7.5, 20);
        $this->fpdf->AddPage('P', array(210, 330));

        // Kop Surat
        // $this->fpdf->Image('karanganyarlogo.png', 10, 10, 20, 25);
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(0, 7, "PEMERINTAH KABUPATEN KARANGANYAR", 0, 1, "C");
        $this->fpdf->SetFont('Arial', 'B', 18);
        $this->fpdf->Cell(0, 7, "DINAS KOMUNIKASI DAN INFORMATIKA", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(0, 5, "Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590", 0, 1, "C");
        $this->fpdf->Cell(0, 5, "Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712", 0, 1, "C");

        // Garis Dua
        $this->fpdf->SetLineWidth(1);
        $this->fpdf->Line(10, 35, 200, 35);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(10, 36, 200, 36);
        $this->fpdf->Ln(7);

        // Lembar ke
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(100, 5, "", 0, 0);
        $this->fpdf->Cell(25, 5, "Lembar ke", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "......................", 0, 1);
        
        $this->fpdf->Cell(100, 5, "", 0, 0);
        $this->fpdf->Cell(25, 5, "Kode No", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "......................", 0, 1);
        
        $this->fpdf->Cell(100, 5, "", 0, 0);
        $this->fpdf->Cell(25, 5, "Nomor", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "......................", 0, 1);
        $this->fpdf->Ln(10);

        // Surat Perintah Perjalanan Dinas
        $this->fpdf->SetFont('Arial', 'U', 12);
        $this->fpdf->Cell(0, 5, "SURAT PERINTAH PERJALANAN DINAS", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(0, 5, "(S P P D)", 0, 1, "C");
        $this->fpdf->Ln(5);

        // Garis Dua
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 77, 190, 77);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 78, 190, 78);
        $this->fpdf->Ln(7);

        // Tabel
        $this->fpdf->SetWidths(Array(10, 65, 95)); // Total width 175
        $this->fpdf->Row(Array('1.', 'Pejabat yang memberi perintah', 'Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar'));
        $this->fpdf->Row(Array('2.', 'Nama / NIP Pegawai yang diperintah', 'Hartono, S.Sos., M.M. / 19691015 199003 1 007'));
        $this->fpdf->Row(Array('3.', 'a. Pangkat dan Golongan menurut PP Np. 6 Tahun 1997', 'Pembina / IV a'));
        $this->fpdf->Row(Array('', 'b. Jabatan', 'Kepala Bidang Tata Kelola Informatika'));
        $this->fpdf->Row(Array('', 'c. Tingkat menurut peraturan perjalanan', '-'));
        $this->fpdf->Row(Array('4.', 'Maksud Perjalanan', 'sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022'));
        $this->fpdf->Row(Array('5.', 'Alat angkut yang dipergunakan', 'Kendaraan Dinas'));
        $this->fpdf->Row(Array('6.', 'a. Tempat berangkat', 'Karanganyar'));
        $this->fpdf->Row(Array('', 'b. Tempat tujuan', 'Pendopo Tri Manunggal, Malanggaten, Kebakkramat'));
        $this->fpdf->Row(Array('7.', 'a. Lamanya Perjalanan Dinas', ''));
        $this->fpdf->Row(Array('', 'b. Tanggal berangkat', '13 Agustus 2022'));
        $this->fpdf->Row(Array('', 'c. Tanggal harus kembali', '13 Agustus 2022'));
        $this->fpdf->Row(Array('8.', 'Pengikut / NIP', '1. Suparno / 19731103 199803 1 012 2. Yahya Fathoni Amri, S.Kom. / -'));
        $this->fpdf->Row(Array('9.', 'Pembebanan Anggaran', ''));
        $this->fpdf->Row(Array('', 'a. Instansi', 'Dinas Kominfo Kabupaten Karanganyar'));
        $this->fpdf->Row(Array('', 'b. Mata Anggaran', 'APBD TA 2022'));
        $this->fpdf->Row(Array('10.', 'Keterangan lain-lain', ''));
        $this->fpdf->Ln(10);

        // Tanda Tangan
        $this->fpdf->Cell(69, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Ditetapkan di", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Karanganyar", 0, 1);
        
        $this->fpdf->Cell(69, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada tanggal", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "13 Agustus 2022", 0, 1);
        $this->fpdf->Ln(5);

        $this->fpdf->Cell(62, 5, "", 0, 0);
        $this->fpdf->Cell(7, 5, "Plt.", 0, 0);
        $this->fpdf->MultiCell(0, 5, "KEPALA DINAS KOMUNIKASI DAN INFORMATIKA ASISTEN ADMINISTRASI UMUM SEKRETARIS DAERAH", 0, 1);
        $this->fpdf->Ln(20);

        $this->fpdf->SetFont('Arial', 'U', 12);
        $this->fpdf->Cell(69, 5, "", 0, 0);
        $this->fpdf->Cell(0, 5, "Drs. SUJARNO, M.Si.", 0, 1);

        $this->fpdf->Cell(69, 5, "", 0, 0);
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(0, 5, "Pembina Utama Muda", 0, 1);
        
        $this->fpdf->Cell(69, 5, "", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP. 19630107 199003 1 004", 0, 1);



        // Halaman Tanda Tangan
        $this->fpdf->AddPage('P', array(210, 330));

        // Romawi I
        $this->fpdf->Cell(75, 5, "", 0, 0);
        $this->fpdf->Cell(7, 5, "I.", 0, 0);
        $this->fpdf->Cell(43, 5, "SPPD No", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "...............................", 0, 1);

        $this->fpdf->Cell(82, 5, "", 0, 0);
        $this->fpdf->Cell(0, 5, "Berangkat dari", 0, 1);

        $this->fpdf->Cell(82, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "(tempat kedudukan)", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Karanganyar", 0, 1);

        $this->fpdf->Cell(82, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "13 Juni 2022", 0, 1);

        $this->fpdf->Cell(82, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Bantul", 0, 1);
        $this->fpdf->Ln(5);

        // Romawi II
        $this->fpdf->Cell(7, 5, "II.", 0, 0);
        $this->fpdf->Cell(30, 5, "Tiba di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(51, 5, "Kab. Bantul", 0, 0);
        $this->fpdf->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Bantul", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(51, 5, "13 Juni 2022", 0, 0);
        $this->fpdf->Cell(30, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Gunung Kidul", 0, 1);

        $this->fpdf->Cell(95, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "13 Juni 2022", 0, 1);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(88, 5, "(............................................................)", 0, 0);
        $this->fpdf->Cell(0, 5, "(............................................................)", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(88, 5, "NIP.", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP.", 0, 1);
        $this->fpdf->Ln(5);

        // Romawi III
        $this->fpdf->Cell(7, 5, "III.", 0, 0);
        $this->fpdf->Cell(30, 5, "Tiba di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(51, 5, "Kab. Gunung Kidul", 0, 0);
        $this->fpdf->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Gunung Kidul", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(51, 5, "14 Juni 2022", 0, 0);
        $this->fpdf->Cell(30, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Karanganyar", 0, 1);

        $this->fpdf->Cell(95, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "14 Juni 2022", 0, 1);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(88, 5, "(............................................................)", 0, 0);
        $this->fpdf->Cell(0, 5, "(............................................................)", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(88, 5, "NIP.", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP.", 0, 1);
        $this->fpdf->Ln(5);

        // Romawi IV
        $this->fpdf->Cell(7, 5, "IV.", 0, 0);
        $this->fpdf->Cell(30, 5, "Tiba di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(51, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(51, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);

        $this->fpdf->Cell(95, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(88, 5, "(............................................................)", 0, 0);
        $this->fpdf->Cell(0, 5, "(............................................................)", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(88, 5, "NIP.", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP.", 0, 1);

        // Garis
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 172, 190, 172);
        $this->fpdf->Ln(10);

        // Romawi V
        $this->fpdf->Cell(70, 5, "", 0, 0);
        $this->fpdf->Cell(7, 5, "V.", 0, 0);
        $this->fpdf->Cell(43, 5, "Tiba kembali di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);

        $this->fpdf->Cell(77, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "Pada tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);

        $this->fpdf->Cell(77, 5, "", 0, 0);
        $this->fpdf->MultiCell(0, 5, "Telah diperiksa, dengan keterangan bahwa perjalanan tersebut diatas benar dilakukan atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.", 0, 1);
        $this->fpdf->Ln(5);

        // Tanda Tangan
        $this->fpdf->Cell(77, 5, "", 0, 0);
        $this->fpdf->MultiCell(0, 5, 'KEPALA DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN KARANGANYAR', 0, 1);
        $this->fpdf->Ln(20);

        $this->fpdf->Cell(77, 5, '', 0, 0);
        $this->fpdf->SetFont('Arial', 'BU', 12);
        $this->fpdf->Cell(0, 5, 'Drs. SUJARNO, M.Si.', 0, 1);

        $this->fpdf->Cell(77, 5, '', 0, 0);
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(0, 5, 'Pembina Utama Muda', 0, 1);

        $this->fpdf->Cell(77, 5, '', 0, 0);
        $this->fpdf->Cell(0, 5, 'NIP. 19630107 199003 1 004', 0, 1);
        $this->fpdf->Ln(10);

        // Romawi VI
        $this->fpdf->Cell(7, 5, "VI.", 0, 0);
        $this->fpdf->Cell(0, 5, "CATATAN LAIN LAIN", 0, 1);
        $this->fpdf->Ln(5);

        // Garis
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 277, 190, 277);

        // Romawi VII
        $this->fpdf->Cell(7, 5, "VII.", 0, 0);
        $this->fpdf->Cell(0, 5, "PERHATIAN", 0, 1);
        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->MultiCell(0, 5, "Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba serta Bendaharawan bertanggung jawab berdasarkan peraturan-peraturan Keuangan  Negara apabila Negara mendapat rugi akibat kesalahan, kealpaannya.", 0, 1);

        $this->fpdf->Output('I', 'SPPD.pdf');

        exit;
    }

    // Daftar Penerimaan Uang Perjalanan Dinas
    public function pdf3()
    {
        $this->fpdf->SetMargins(10, 7.5, 10);
        $this->fpdf->AddPage("L", array(330, 210));

        // Judul, Kegiatan, Lokasi
        $this->fpdf->SetFont('Arial', '', 14);
        $this->fpdf->Cell(0, 7, "PEMERINTAH KABUPATEN KARANGANYAR", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(0, 5, "Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022", 0, 1, "C");
        $this->fpdf->Cell(0, 5, "Lokasi: Pendopo Tri Manunggal, Malanggaten, Kebakkramat, Tanggal 13 Agustus 2022", 0, 1, "C");
        $this->fpdf->Ln(5);

        // Kegiatan, Kode Rekening, Unit Kerja
        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->Cell(35, 5, "Kegiatan", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022", 0, 1);

        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->Cell(35, 5, "Kode Rekening", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "2.16.03.2.02.06.5.1.02.04.01.003", 0, 1);
        $this->fpdf->Ln(5);

        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->Cell(35, 5, "Unit Kerja", 0, 0);
        $this->fpdf->Cell(5, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Dinas Komunikasi dan Informatika Kabupaten Karanganyar", 0, 1);
        $this->fpdf->Ln(3);

        // Tabel Header
        $this->fpdf->SetWidths(Array(10, 62, 90, 30, 25, 37, 30, 26)); // Total width 310
        $this->fpdf->SetAligns(Array("C", "C", "C", "C", "C", "C", "C", "C"));
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Row(Array('No.', 'Nama / NIP', 'Jabatan / Pangkat / Gol. Eselon', 'Uang Harian', 'Uang Transport', 'Biaya Transport', 'Penerimaan', 'Tanda Tangan'));

        // Tabel Body
        $this->fpdf->SetAligns(Array("L", "L", "L", "L", "L", "L", "L", "L"));
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Row(Array('1', 'Hartono, S.Sos., M.M. 19691015 199003 1 007', 'Kepala Bidang Tata kelola Informatika Dinas Kominfo Kab. Karanganyar / Pembina / IV a', 'Uang Harian', 'Rp80.000', '8 Lt x Rp 12.500 = Rp100.000', 'Rp180.000', ''));
        $this->fpdf->Row(Array('2', 'Suparno 19731103 199803 1 012', 'Analis Sistem Informasi dan Diseminasi Hukum Pada Seksi Persandian dan Keamanan Jaringan dinas Kominfo Kab. Karanganyar / Pengatur Tingkat I / II d', 'Uang Harian', 'Rp60.000', '', 'Rp60.000', ''));
        $this->fpdf->Row(Array('2', 'Yahya Fathoni Amri, S.Kom.', 'Network Analyst Dinas Kominfo Kab. Karanganyar / -', '', 'Rp50.000', '', 'Rp50.000', ''));

        // Tabel Jumlah
        // $this->fpdf->Row(Array('Jumlah', '', 'Rp190.000', 'Rp100.000', 'Rp290.000'));
        $this->fpdf->Cell(162, 7, "Jumlah", 1, 0, "C");
        $this->fpdf->Cell(30, 7, "", 1, 0);
        $this->fpdf->Cell(25, 7, "Rp190.000", 1, 0);
        $this->fpdf->Cell(37, 7, "Rp100.000", 1, 0);
        $this->fpdf->Cell(30, 7, "Rp290.000", 1, 0);
        $this->fpdf->Cell(0, 7, "", 1, 1);

        $this->fpdf->Ln(5);

        // Lunas dibayar
        $this->fpdf->Cell(230, 5, "", 0, 0);
        $this->fpdf->Cell(60, 5, "Lunas dibayar,", 0, 0);
        $this->fpdf->Cell(0, 5, "2022", 0, 1, "R");
        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->Cell(0, 5, "Mengetahui / Setuju Dibayar", 0, 1);

        // Tanda Tangan
        $this->fpdf->Cell(10, 5, "Plt.", 0, 0);
        $this->fpdf->Cell(120, 5, "KEPALA DINAS KOMUNIKASI DAN INFORMATIKA", 0, 0);
        $this->fpdf->Cell(0, 5, "Mengetahui :", 0, 1);

        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->Cell(120, 5, "ASISTEN ADMINISTRASI UMUM SEKRETARIS DAERAH", 0, 0);
        $this->fpdf->Cell(100, 5, "Pejabat Pelaksana Teknis Kegiatan", 0, 0);
        $this->fpdf->Cell(0, 5, "Bendahara Pengeluaran", 0, 1);
        
        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->Cell(120, 5, "Selaku Pengguna Anggaran", 0, 0);
        $this->fpdf->Cell(100, 5, "Bidang Tata Kelola Informatika", 0, 0);
        $this->fpdf->Cell(0, 5, "Dinas Komunikasi dan Informatika", 0, 1);
        $this->fpdf->Ln(20);

        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->SetFont('Arial', 'U', 12);
        $this->fpdf->Cell(120, 5, "Drs. SUJARNO, M.Si.", 0, 0);
        $this->fpdf->Cell(100, 5, "Hartono, S.Sos., M.M.", 0, 0);
        $this->fpdf->Cell(0, 5, "ENDANG WERDININGSIH, S.Sos.", 0, 1);
        
        $this->fpdf->Cell(10, 5, "", 0, 0);
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(120, 5, "NIP.19630107 199003 1 004 ", 0, 0);
        $this->fpdf->Cell(100, 5, "NIP. 19691015 199003 1 007", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP. 19711210 199403 2 002", 0, 1);

        $this->fpdf->Output('I', 'Daftar Uang.pdf');

        exit;
    }
}
