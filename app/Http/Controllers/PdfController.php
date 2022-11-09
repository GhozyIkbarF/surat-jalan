<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
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
        $this->fpdf = new Fpdf('P','mm',array(215,330));
        $this->fpdf = new PDF_MC_Table();
        $this->pdf = new Fpdf('L','mm',array(330,215));
        $this->pdf = new PDF_MC_Table();
    }

    public function index()
    {
        // $this->fpdf->Image();
        $this->fpdf->SetLeftMargin(20);
        $this->fpdf->SetRightMargin(20);
        $this->fpdf->SetTopMargin(7.5);
        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(195, 7, "PEMERINTAH KABUPATEN KARANGANYAR", 0, 1, "C");
        $this->fpdf->SetFont('Arial', 'B', 18);
        $this->fpdf->Cell(195, 7, "DINAS KOMUNIKASI DAN INFORMATIKA", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(195, 5, "Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590", 0, 1, "C");
        $this->fpdf->Cell(195, 5, "Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712", 0, 1, "C");

        $this->fpdf->SetLineWidth(1);
        $this->fpdf->Line(10, 35, 205, 35);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(10, 36, 205, 36);
        $this->fpdf->Ln(15);

        $this->fpdf->SetFont('Arial', 'BU', 12);
        $this->fpdf->Cell(195, 0, "SURAT PERINTAH TUGAS", 0, 1, "C");
        $this->fpdf->Ln(5);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(195, 0, "Nomor :", 0, 1, "C");
        $this->fpdf->Ln(10);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(30, 5, 'Dasar', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);
        $this->fpdf->MultiCell(130, 5, 'Dokumen Pelaksanaan Anggaran (DPA) Dinas Komunikasi dan Informatika Kabupaten Karanganyar TA. 2022, Sub Kegiatan Pengembangan dan Pengelolaan Ekosistem Kabupaten/Kota Cerdas, dan Kota Cerdas No. Rekening : 2.16.03.2.02.09.5.1.02.04.01.0001', 0);
        $this->fpdf->Ln(15);

        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(195, 0, "MEMERINTAHKAN :", 0, 1, "C");
        $this->fpdf->Ln(15);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(30, 5, 'Kepada', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0, "C");
        $this->fpdf->MultiCell(130, 5, 'Terlampir', 0, 0);
        $this->fpdf->Ln(10);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(30, 5, 'Untuk', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0, "C");
        $this->fpdf->MultiCell(130, 5, 'Mengikuti kunjungan kerja dalam rangka Sharing Knowledge Dan Evaluasi Pelaksanaan Indeks SPBE tahun 2022 di Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Bantul, serta Persiapan Pelaksanaan Penilaian Program Smartcity di Dinas Komunikasi, dan Informatika (Diskominfo) Kabupaten Gunung Kidul pada :', 0);
        $this->fpdf->Ln(10);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(15, 5, 'Dengan ketentuan: ', 0, 1);
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(15, 5, 'Setelah selesai melaksanakan tugas segera melaporkan hasil pelaksanaan tugas kepada atasan.', 0, 0);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(180, 30, "Demikian untuk dilaksanakan sebagaimana mestinya.", 0, 1, "C");
        $this->fpdf->Output();

        exit;
    }

    public function pdf2()
    {
        // $this->fpdf->Image();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(195, 7, "PEMERINTAH KABUPATEN KARANGANYAR", 0, 1, "C");
        $this->fpdf->SetFont('Arial', 'B', 18);
        $this->fpdf->Cell(195, 7, "DINAS KOMUNIKASI DAN INFORMATIKA", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(195, 5, "Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590", 0, 1, "C");
        $this->fpdf->Cell(195, 5, "Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712", 0, 1, "C");

        $this->fpdf->SetLineWidth(1);
        $this->fpdf->Line(10, 35, 205, 35);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(10, 36, 205, 36);
        $this->fpdf->Ln(15);

        $this->fpdf->SetFont('Arial', 'BU', 12);
        $this->fpdf->Cell(195, 5, "SURAT PERINTAH PERJALANAN DINAS", 0, 1, "C");
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(195, 5, "(S P P D)", 0, 1, "C");

        $this->fpdf->SetLineWidth(1);
        $this->fpdf->Line(10, 35, 190, 35);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(10, 36, 190, 36);
        $this->fpdf->Ln(15);

        $this->fpdf->SetWidths(Array(10,75,80));
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Row(Array('1.', 'Pejabat yang memberi perintah', 'Kepala Dinas Kominfo Kab. Karanganyar'));
        $this->fpdf->Row(Array('2.', 'Nama Pegawai yang  diperintah', 'Hartono, S.Sos, M.M.
        NIP. 19691015 199003 1 007'));
        $this->fpdf->Row(Array('3.', 'a. Pangkat dan Golongan menurut PP No. 6 Tahun 1997', ''));
        $this->fpdf->Row(Array('', 'b.	Jabatan', 'Kepala Dinas Kominfo Kab. Karanganyar'));
        $this->fpdf->Row(Array('', 'c. Tingkat menurut peraturan perjalanan', 'Kepala Dinas Kominfo Kab. Karanganyar'));
        $this->fpdf->Row(Array('4.', 'Maksud Perjalanan Dinas', 'Sharing Knowledge Dan Evaluasi Pelaksanaan Indeks SPBE tahun 2022 di Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Bantul, serta Persiapan Pelaksanaan Penilaian Program Smartcity di Dinas Komunikasi, dan Informatika (Diskominfo) Kabupaten Gunung Kidul'));
        $this->fpdf->Row(Array('5.', 'Pejabat yang memberi perintah', 'Kepala Dinas Kominfo Kab. Karanganyar'));
        $this->fpdf->Row(Array('5.', 'Alat angkut yang dipergunakan', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('6.', 'a. Tempat berangkat', 'Karanganyar'));
        $this->fpdf->Row(Array('', 'b. Tempat tujuan', 'Diskominfo Kabupaten Bantul dan Diskominfo Kabupaten Gunung Kidul.'));
        $this->fpdf->Row(Array('7.', 'a. Lamanya Perjalanan Dinas', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('', 'b. Tanggal berangkat', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('', 'c. Tanggal harus kembali', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('8.', 'Pengikut', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('9.', 'Pembebanan Anggaran', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('', 'a. Instansi', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('', 'b. Mata Anggaran', 'Kendaraan Umum'));
        $this->fpdf->Row(Array('10.', 'Keterangan Lain-lain', 'Kendaraan Umum'));


        $this->fpdf->Output();

        exit;
    }


    public function pdf3()
    {
        // $this->fpdf->Image();
        $this->pdf->AddPage("L", "Legal");
        $this->pdf->SetFont('Arial', '', 13);
        $this->pdf->Cell(295, 5, "DAFTAR PENERIMAAN UANG PERJALANAN DINAS", 0, 1, "C");
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(295, 5, "Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022", 0, 1, "C");
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(295, 5, "Lokasi : Pendopo Tri Manunggal, Malanggaten, Kabkkramat, Tanggal 13 Agustus 2022", 0, 1, "C");
        $this->pdf->Ln(10);
        
        $this->pdf->SetFont('Arial', '', 13);
        $this->pdf->WriteHTML('<p align="center" >DAFTAR PENERIMAAN UANG PERJALANAN DINAS</p><br>');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->WriteHTML('<p align="center" >Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</p><br><p align="center>Lokasi : Pendopo Tri Manunggal, Malanggaten, Kabkkramat, Tanggal 13 Agustus 2022</p>');

        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(30, 5, "Kegiatan", 0, 0);
        $this->pdf->Cell(10, 5, ":", 0, 0);
        $this->pdf->MultiCell(200, 5, "Sarasehan dan Renungan Ulang", 0, 0);
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(30, 5, "Kode Rekening", 0, 0);
        $this->pdf->Cell(10, 5, ":", 0, 0);
        $this->pdf->MultiCell(200, 5, "00000000000000000", 0, 0);
        $this->pdf->Ln(5);
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(30, 5, "Unit Kerja", 0, 0);
        $this->pdf->Cell(10, 5, ":", 0, 0);
        $this->pdf->MultiCell(200, 5, "aldgldjglsdjfglsjdflgjdlfjlsdfj", 0, 0);
        $this->pdf->Ln(5);

        $this->pdf->SetWidths(Array(10,80,90,50,30,50,60,30));
        $this->pdf->SetFont('Arial', 'B', 12);
        $this->pdf->Cell(10, 5, "NO", 0, 1, "C");
        $this->pdf->Cell(70, 5, "Nama / NIP", 0, 1, "C");
        $this->pdf->Cell(80, 5, "Jabatan / Pangkat / Gol. Eselon", 0, 1, "C");
        $this->pdf->Cell(30, 5, "Uang Harian", 0, 1, "C");
        $this->pdf->MultiCell(25, 5, "Uang Transport", 0, 1);
        $this->pdf->Cell(30, 5, "Biaya Transport", 0, 1, "C");
        $this->pdf->Cell(30, 5, "Penerimaan", 0, 1, "C");
        $this->pdf->MultiCell(20, 5, "Tanda Tangan", 0, 1);

        $this->pdf->Row(Array('NO', 'Nama / NIP', 'Jabatan / Pangkat / Gol. Eselon', 'Uang Harian', 'Uang Transport',
        'Biaya Transport', 'Penerimaan', 'Tanda Tangan'));
        $this->pdf->SetFont('Arial', '', 12);
        $this->pdf->WriteHTML('You can<br><p align="center" >center a line</p>and add a horizontal rule:<br><hr>');
       

        $this->pdf->Output();

        exit;
    }
}
