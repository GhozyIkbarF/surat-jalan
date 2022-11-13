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
        $this->fpdf = new Fpdf('P','mm',array(215,330));
        $this->fpdf = new Fpdf('P','mm',array(215,330));
    }

    // Surat Perintah Tugas
    public function index()
    {
        $this->fpdf->SetMargins(20, 7.5, 20);
        $this->fpdf->AddPage();

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
        $this->fpdf->AddPage();

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
        $this->fpdf->Line(20, 77, 195, 77);
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 78, 195, 78);
        $this->fpdf->Ln(7);


        // Halaman Tanda Tangan
        $this->fpdf->AddPage();

        // Romawi I
        $this->fpdf->Cell(80, 5, "", 0, 0);
        $this->fpdf->Cell(7, 5, "I.", 0, 0);
        $this->fpdf->Cell(43, 5, "SPPD No", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "...............................", 0, 1);

        $this->fpdf->Cell(87, 5, "", 0, 0);
        $this->fpdf->Cell(0, 5, "Berangkat dari", 0, 1);

        $this->fpdf->Cell(87, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "(tempat kedudukan)", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Karanganyar", 0, 1);

        $this->fpdf->Cell(87, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "13 Juni 2022", 0, 1);

        $this->fpdf->Cell(87, 5, "", 0, 0);
        $this->fpdf->Cell(43, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Bantul", 0, 1);
        $this->fpdf->Ln(5);

        // Romawi II
        $this->fpdf->Cell(7, 5, "II.", 0, 0);
        $this->fpdf->Cell(30, 5, "Tiba di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(56, 5, "Kab. Bantul", 0, 0);
        $this->fpdf->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Bantul", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(56, 5, "13 Juni 2022", 0, 0);
        $this->fpdf->Cell(30, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Gunung Kidul", 0, 1);

        $this->fpdf->Cell(100, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "13 Juni 2022", 0, 1);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(93, 5, "(............................................................)", 0, 0);
        $this->fpdf->Cell(0, 5, "(............................................................)", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(93, 5, "NIP.", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP.", 0, 1);
        $this->fpdf->Ln(5);

        // Romawi III
        $this->fpdf->Cell(7, 5, "III.", 0, 0);
        $this->fpdf->Cell(30, 5, "Tiba di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(56, 5, "Kab. Gunung Kidul", 0, 0);
        $this->fpdf->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Gunung Kidul", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(56, 5, "14 Juni 2022", 0, 0);
        $this->fpdf->Cell(30, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "Kab. Karanganyar", 0, 1);

        $this->fpdf->Cell(100, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "14 Juni 2022", 0, 1);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(93, 5, "(............................................................)", 0, 0);
        $this->fpdf->Cell(0, 5, "(............................................................)", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(93, 5, "NIP.", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP.", 0, 1);
        $this->fpdf->Ln(5);

        // Romawi IV
        $this->fpdf->Cell(7, 5, "IV.", 0, 0);
        $this->fpdf->Cell(30, 5, "Tiba di", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(56, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Berangkat dari", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(56, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Ke", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);

        $this->fpdf->Cell(100, 5, "", 0, 0);
        $this->fpdf->Cell(30, 5, "Pada Tanggal", 0, 0);
        $this->fpdf->Cell(7, 5, ":", 0, 0);
        $this->fpdf->Cell(0, 5, "", 0, 1);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(93, 5, "(............................................................)", 0, 0);
        $this->fpdf->Cell(0, 5, "(............................................................)", 0, 1);

        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->Cell(93, 5, "NIP.", 0, 0);
        $this->fpdf->Cell(0, 5, "NIP.", 0, 1);

        // Garis
        $this->fpdf->SetLineWidth(0);
        $this->fpdf->Line(20, 172, 195, 172);
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
        $this->fpdf->Line(20, 277, 195, 277);

        // Romawi VII
        $this->fpdf->Cell(7, 5, "VII.", 0, 0);
        $this->fpdf->Cell(0, 5, "PERHATIAN", 0, 1);
        $this->fpdf->Cell(7, 5, "", 0, 0);
        $this->fpdf->MultiCell(0, 5, "Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba serta Bendaharawan bertanggung jawab berdasarkan peraturan-peraturan Keuangan  Negara apabila Negara mendapat rugi akibat kesalahan, kealpaannya.", 0, 1);

        $this->fpdf->Output('I', 'SPPD.pdf');

        exit;
    }
}
