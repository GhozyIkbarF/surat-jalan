<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


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

    function Kop($h1, $h2, $h3, $h4)
    {
        // Kop
        $this->Image('https://sippn.menpan.go.id/images/article/large/karanganyar-logo1.png', 10, 7.5, 24, 26.7, 'PNG');
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(25, 7, "", 0, 0, "C");
        $this->Cell(0, 7, $h1, 0, 1, "C");
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(25, 7, "", 0, 0, "C");
        $this->Cell(0, 7, $h2, 0, 1, "C");
        $this->SetFont('Arial', '', 10);
        $this->Cell(25, 7, "", 0, 0, "C");
        $this->Cell(0, 5, $h3, 0, 1, "C");
        $this->Cell(25, 7, "", 0, 0, "C");
        $this->Cell(0, 5, $h4, 0, 1, "C");

        // Garis
        $this->SetLineWidth(1);
        $this->Line(10, 35, 200, 35);
        $this->SetLineWidth(0);
        $this->Line(10, 36, 200, 36);
        $this->Ln(7);
    }

    function Dasar($dasar)
    {
        $this->Cell(30, 5, 'Dasar', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->MultiCell(0, 5, $dasar, 0);
        $this->Ln(10);
    }

    function Pegawai($nama1, $pangkat1, $nip1, $jabatan1, $nama2, $pangkat2, $nip2, $jabatan2, $nama3, $pangkat3, $nip3, $jabatan3)
    {
        $this->Cell(5, 5, '1.', 0, 0);
        $this->Cell(45, 5, 'Nama', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $nama1, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'Pangkat / Gol Ruang', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $pangkat1, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'NIP', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $nip1, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'Jabatan', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $jabatan1, 0, 1);
        $this->Ln(5);

        $this->Cell(35, 5, "", 0, 0);
        $this->Cell(5, 5, '2.', 0, 0);
        $this->Cell(45, 5, 'Nama', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $nama2, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'Pangkat / Gol Ruang', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $pangkat2, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'NIP', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $nip2, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'Jabatan', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $jabatan2, 0, 1);
        $this->Ln(5);

        $this->Cell(35, 5, "", 0, 0);
        $this->Cell(5, 5, '3.', 0, 0);
        $this->Cell(45, 5, 'Nama', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $nama3, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'Pangkat / Gol Ruang', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $pangkat3, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'NIP', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $nip3, 0, 1);

        $this->Cell(40, 5, "", 0, 0);
        $this->Cell(45, 5, 'Jabatan', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $jabatan3, 0, 1);
        $this->Ln(5);
    }

    function Untuk($untuk, $tanggal, $waktu, $tempat)
    {
        $this->Cell(30, 5, 'Untuk', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->MultiCell(0, 5, $untuk, 0);
        $this->Cell(35, 5, '', 0, 0);

        $this->Cell(50, 5, 'Hari / Tanggal', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $tanggal, 0, 1);
        $this->Cell(35, 5, '', 0, 0);

        $this->Cell(50, 5, 'Waktu', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->Cell(0, 5, $waktu, 0, 1);
        $this->Cell(35, 5, '', 0, 0);

        $this->Cell(50, 5, 'Tempat', 0, 0);
        $this->Cell(5, 5, ':', 0, 0);
        $this->MultiCell(0, 5, $tempat, 0);
        $this->Ln(5);
    }

    function TTD($tempat, $tanggal, $bu)
    {
        $this->Cell(69, 5, "", 0, 0);
        $this->Cell(30, 5, "Ditetapkan di", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, $tempat, 0, 1);
        
        $this->Cell(69, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada tanggal", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, $tanggal, 0, 1);
        $this->Ln(5);

        $this->Cell(62, 5, "", 0, 0);
        $this->Cell(7, 5, "Plt.", 0, 0);
        $this->MultiCell(0, 5, "KEPALA DINAS KOMUNIKASI DAN INFORMATIKA ASISTEN ADMINISTRASI UMUM SEKRETARIS DAERAH", 0, 1);
        $this->Ln(20);

        $this->SetFont('Arial', $bu, 12);
        $this->Cell(69, 5, "", 0, 0);
        $this->Cell(0, 5, "Drs. SUJARNO, M.Si.", 0, 1);

        $this->Cell(69, 5, "", 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 5, "Pembina Utama Muda", 0, 1);
        
        $this->Cell(69, 5, "", 0, 0);
        $this->Cell(0, 5, "NIP. 19630107 199003 1 004", 0, 1);
    }

    function Lembar($lembar, $kode, $nomor)
    {
        $this->SetFont('Arial', '', 12);
        $this->Cell(100, 5, "", 0, 0);
        $this->Cell(25, 5, "Lembar ke", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, "$lembar", 0, 1);
        
        $this->Cell(100, 5, "", 0, 0);
        $this->Cell(25, 5, "Kode No", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, "$kode", 0, 1);
        
        $this->Cell(100, 5, "", 0, 0);
        $this->Cell(25, 5, "Nomor", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, "$nomor", 0, 1);
        $this->Ln(10);
    }

    function Tabel($pejabat, $pegawai, $pangkat, $jabatan, $tingkat, $maksud, $kendaraan, $berangkat, $tujuan, $lama, $tglberangkat, $tglkembali, $instansi, $anggaran, $keterangan)
    {
        $this->SetWidths(Array(10, 65, 95)); // Total width 175
        $this->Row(Array('1.', 'Pejabat yang memberi perintah', $pejabat));
        $this->Row(Array('2.', 'Nama / NIP Pegawai yang diperintah', $pegawai));
        $this->Row(Array('3.', 'a. Pangkat dan Golongan menurut PP Np. 6 Tahun 1997', $pangkat));
        $this->Row(Array('', 'b. Jabatan', $jabatan));
        $this->Row(Array('', 'c. Tingkat menurut peraturan perjalanan', $tingkat));
        $this->Row(Array('4.', 'Maksud Perjalanan', $maksud));
        $this->Row(Array('5.', 'Alat angkut yang dipergunakan', $kendaraan));
        $this->Row(Array('6.', 'a. Tempat berangkat', $berangkat));
        $this->Row(Array('', 'b. Tempat tujuan', $tujuan));
        $this->Row(Array('7.', 'a. Lamanya Perjalanan Dinas', $lama));
        $this->Row(Array('', 'b. Tanggal berangkat', $tglberangkat));
        $this->Row(Array('', 'c. Tanggal harus kembali', $tglkembali));
        $this->Row(Array('8.', 'Pengikut / NIP', '1. Suparno / 19731103 199803 1 012 \n 2. Yahya Fathoni Amri, S.Kom. / -'));
        $this->Row(Array('9.', 'Pembebanan Anggaran', ''));
        $this->Row(Array('', 'a. Instansi', $instansi));
        $this->Row(Array('', 'b. Mata Anggaran', $anggaran));
        $this->Row(Array('10.', 'Keterangan lain-lain', $keterangan));
        $this->Ln(10);
    }

    function RomawiI($no, $dari, $tgl, $ke)
    {
        $this->Cell(75, 5, "", 0, 0);
        $this->Cell(7, 5, "I.", 0, 0);
        $this->Cell(43, 5, "SPPD No", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $no, 0, 1);

        $this->Cell(82, 5, "", 0, 0);
        $this->Cell(0, 5, "Berangkat dari", 0, 1);

        $this->Cell(82, 5, "", 0, 0);
        $this->Cell(43, 5, "(tempat kedudukan)", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $dari, 0, 1);

        $this->Cell(82, 5, "", 0, 0);
        $this->Cell(43, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $tgl, 0, 1);

        $this->Cell(82, 5, "", 0, 0);
        $this->Cell(43, 5, "Ke", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $ke, 0, 1);
        $this->Ln(5);
    }

    function RomawiII($tiba, $tgltiba, $dari, $ke, $tgldari)
    {
        $this->Cell(7, 5, "II.", 0, 0);
        $this->Cell(30, 5, "Tiba di", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(51, 5, $tiba, 0, 0);
        $this->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $dari, 0, 1);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(51, 5, $tgltiba, 0, 0);
        $this->Cell(30, 5, "Ke", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $ke, 0, 1);

        $this->Cell(95, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $tgldari, 0, 1);
        $this->Ln(15);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(88, 5, "(............................................................)", 0, 0);
        $this->Cell(0, 5, "(............................................................)", 0, 1);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(88, 5, "NIP.", 0, 0);
        $this->Cell(0, 5, "NIP.", 0, 1);
        $this->Ln(5);
    }

    function RomawiIII($tiba, $tgltiba, $dari, $ke, $tgldari)
    {
        $this->Cell(7, 5, "III.", 0, 0);
        $this->Cell(30, 5, "Tiba di", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(51, 5, $tiba, 0, 0);
        $this->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $dari, 0, 1);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(51, 5, $tgltiba, 0, 0);
        $this->Cell(30, 5, "Ke", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $ke, 0, 1);

        $this->Cell(95, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $tgldari, 0, 1);
        $this->Ln(15);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(88, 5, "(............................................................)", 0, 0);
        $this->Cell(0, 5, "(............................................................)", 0, 1);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(88, 5, "NIP.", 0, 0);
        $this->Cell(0, 5, "NIP.", 0, 1);
        $this->Ln(5);
    }

    function RomawiIV($tiba, $tgltiba, $dari, $ke, $tgldari)
    {
        $this->Cell(7, 5, "IV.", 0, 0);
        $this->Cell(30, 5, "Tiba di", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(51, 5, $tiba, 0, 0);
        $this->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $dari, 0, 1);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(51, 5, $tgltiba, 0, 0);
        $this->Cell(30, 5, "Ke", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $ke, 0, 1);

        $this->Cell(95, 5, "", 0, 0);
        $this->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $tgldari, 0, 1);
        $this->Ln(15);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(88, 5, "(............................................................)", 0, 0);
        $this->Cell(0, 5, "(............................................................)", 0, 1);

        $this->Cell(7, 5, "", 0, 0);
        $this->Cell(88, 5, "NIP.", 0, 0);
        $this->Cell(0, 5, "NIP.", 0, 1);
    }

    function RomawiV($tiba, $tgl)
    {
        $this->Cell(70, 5, "", 0, 0);
        $this->Cell(7, 5, "V.", 0, 0);
        $this->Cell(43, 5, "Tiba kembali di", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $tiba, 0, 1);

        $this->Cell(77, 5, "", 0, 0);
        $this->Cell(43, 5, "Pada tanggal", 0, 0);
        $this->Cell(7, 5, ":", 0, 0);
        $this->Cell(0, 5, $tgl, 0, 1);

        $this->Cell(77, 5, "", 0, 0);
        $this->MultiCell(0, 5, "Telah diperiksa, dengan keterangan bahwa perjalanan tersebut diatas benar dilakukan atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.", 0, 1);
        $this->Ln(5);
    }

    function Judul($kegiatan, $lokasi)
    {
        $this->SetFont('Arial', '', 14);
        $this->Cell(0, 7, "PEMERINTAH KABUPATEN KARANGANYAR", 0, 1, "C");
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 5, $kegiatan, 0, 1, "C");
        $this->Cell(0, 5, "Lokasi: ". $lokasi, 0, 1, "C");
        $this->Ln(5);
    }

    function Kegiatan($kegiatan, $rekening, $unitkerja)
    {
        $this->Cell(10, 5, "", 0, 0);
        $this->Cell(35, 5, "Kegiatan", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, $kegiatan, 0, 1);

        $this->Cell(10, 5, "", 0, 0);
        $this->Cell(35, 5, "Kode Rekening", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, $rekening, 0, 1);
        $this->Ln(5);

        $this->Cell(10, 5, "", 0, 0);
        $this->Cell(35, 5, "Unit Kerja", 0, 0);
        $this->Cell(5, 5, ":", 0, 0);
        $this->Cell(0, 5, $unitkerja, 0, 1);
        $this->Ln(3);
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

        // Kop Surat dan Garis Dua
        $this->fpdf->Kop("PEMERINTAH KABUPATEN KARANGANYAR", "DINAS KOMUNIKASI DAN INFORMATIKA", "Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590", "Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712");

        // Judul Surat Perintah Tugas
        $this->fpdf->SetFont('Arial', 'BU', 12);
        $this->fpdf->Cell(0, 7, "SURAT PERINTAH TUGAS", 0, 1, "C");
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(57, 7, "", 0, 0);
        $this->fpdf->Cell(0, 7, "Nomor :", 0, 0);
        $this->fpdf->Ln(15);

        // Dasar
        $this->fpdf->Dasar('Perintah Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar tanggal 13 Agustus 2022');

        // Memerintahkan
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(0, 5, "MEMERINTAHKAN :", 0, 1, "C");
        $this->fpdf->Ln(10);

        // Kepada
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(30, 5, 'Kepada', 0, 0);
        $this->fpdf->Cell(5, 5, ':', 0, 0);

        $this->fpdf->Pegawai('Hartono, S.Sos., M.M.', 'Pembina / IV a', '19691015', 'Kepala Bidang Tata Kelola Informatika', 'Hartono, S.Sos., M.M.', 'Pembina / IV a', '19691015', 'Kepala Bidang Tata Kelola Informatika', 'Hartono, S.Sos., M.M.', 'Pembina / IV a', '19691015', 'Kepala Bidang Tata Kelola Informatika', );

        // Untuk
        $this->fpdf->Untuk('Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022 yang dilaksanakan pada', 'Senin - Selasa / 13 -14 Juni 2022', '07.30 WIB s/d selesai', 'Diskominfo Kabupaten Bantul dan Diskominfo Kabupaten Gunung Kidul');

        // Dengan Ketentuan
        $this->fpdf->Cell(0, 5, 'Dengan ketentuan : ', 0, 1);
        $this->fpdf->MultiCell(0, 5, 'Setelah selesai melaksanakan tugas segera melaporkan hasil pelaksanaan tugas kepada atasan.', 0);

        $this->fpdf->Cell(0, 5, "Demikian untuk dilaksanakan sebagaimana mestinya.", 0, 1, "C");
        $this->fpdf->Ln(15);

        // Tanda Tangan
        $this->fpdf->TTD("Karanganyar", "13 Agustus 2022", "BU");

        $this->fpdf->Output('I', 'SPT.pdf');

        exit;
    }

    // Surat Permintaan Perjalanan Dinas
    public function pdf2()
    {
        $this->fpdf->SetMargins(20, 7.5, 20);
        $this->fpdf->AddPage('P', array(210, 330));

        // Kop Surat dan Garis Dua
        $this->fpdf->Kop("PEMERINTAH KABUPATEN KARANGANYAR", "DINAS KOMUNIKASI DAN INFORMATIKA", "Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590", "Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712");

        // Lembar ke
        $this->fpdf->Lembar('......................', '......................', '......................');

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
        $this->fpdf->Tabel('Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar', 'Hartono, S.Sos., M.M. / 19691015 199003 1 007', 'Pembina / IV a', 'Kepala Bidang Tata Kelola Informatika', '-', 'Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022', 'Kendaraan Dinas', 'Karanganyar', 'Pendopo Tri Manunggal, Malanggaten, Kebakkramat', '', '13 Agustus 2022', '13 Agustus 2022', '', 'Dinas Kominfo Kabupaten Karanganyar', 'APBD TA 2022', '');

        // Tanda Tangan
        $this->fpdf->TTD("Karanganyar", "13 Agustus 2022", "U");

        // Halaman Tanda Tangan
        $this->fpdf->AddPage('P', array(210, 330));

        // Romawi I
        $this->fpdf->RomawiI("...............................", "Kab. Karanganyar", "13 Juni 2022", "Kab. Bantul");

        // Romawi II
        $this->fpdf->RomawiII("Kab. Bantul", "13 Juni 2022", "Kab. Bantul", "Kab. Gunung Kidul", "13 Juni 2022");

        // Romawi III
        $this->fpdf->RomawiIII("Kab. Gunung Kidul", "14 Juni 2022", "Kab. Gunung Kidul", "Kab. Karanganyar", "14 Juni 2022");

        // Romawi IV
        $this->fpdf->RomawiIV("", "", "", "", "");

        // Garis
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 172, 190, 172);
        $this->fpdf->Ln(10);

        // Romawi V
        $this->fpdf->RomawiV("", "");

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
        $this->fpdf->Line(20, 282, 190, 282);

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
        $this->fpdf = new PDF_MC_Table();
        $this->fpdf->SetMargins(10, 7.5, 10);
        $this->fpdf->AddPage("L", array(330, 210));

        // Judul, Kegiatan, Lokasi
        $this->fpdf->Judul("Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022", "Pendopo Tri Manunggal, Malanggaten, Kebakkramat, Tanggal 13 Agustus 2022");

        // Kegiatan, Kode Rekening, Unit Kerja
        $this->fpdf->Kegiatan("Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022", "2.16.03.2.02.06.5.1.02.04.01.003", "Dinas Komunikasi dan Informatika Kabupaten Karanganyar");

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
