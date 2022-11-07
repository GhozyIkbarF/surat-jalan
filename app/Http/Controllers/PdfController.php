<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
// use public\images\karanganyarlogo;

class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf('P','mm',array(215,330));
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
        $this->fpdf->AddPage("P", "Legal");
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

        
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(10, 5, "1.", 1, 0);
        $this->fpdf->Cell(75, 5, "Pejabat yang memberi perintah", 1, 0);
        $this->fpdf->MultiCell(80, 5, "Kepala Dinas Kominfo Kab. Karanganyar", 1, 1);
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(10, 5, "2.", 1, 0);
        $this->fpdf->MultiCell(75, 5, "Nama Pegawai yang  diperintah", 1, 0);
        $this->fpdf->MultiCell(80, 5, "Hartono, S.Sos, M.M. 
        NIP. 19691015 199003 1 007
        ", 1, 1);

        $this->fpdf->Output();

        exit;
    }
}
