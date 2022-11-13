<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class pdf2controller extends Controller
{
    // protected $fpdf;

    public function __construct() {
        $this->fpdf = new FPDF('', '', array(210, 330));
    }

    public function letak($gambar) {
        // memasukkan gambar di header
        $this->Image($gambar, 10, 10, 20, 25);
    }

    public function judul($teks1, $teks2, $teks3, $teks4) {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(195, 7, $teks1, 0, 1, 'C');
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(195, 7, $teks2, 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->Cell(195, 5, $teks3, 0, 1, 'C');
        $this->Cell(195, 5, $teks4, 0, 1, 'C');
    }

    public function garis() {
        $this->SetLineWidth(1);
        $this->Line(10, 35, 205, 35);
        $this->SetLineWidth(0);
        $this->Line(10, 36, 205, 36);
    }

    public function pdf() {
        $this->fpdf->AddPage();
        $this->fpdf->letak('logo.png');
        $this->fpdf->judul('PEMERINTAH KABUPATEN KARANGANYAR', 'DINAS KOMUNIKASI DAN INFORMATIKA', 'Alamat : Jl. Lawu No. 385 B Karanganyar  Telepon (0271) 495039 ext. 228   Faks. (0271) 495590', 'Website : www.karanganyarkab.go.id    E-mail : diskominfo@karanganyarkab.go.id   Kode Pos 57712');
        $this->fpdf->garis();
        $this->fpdf->Output('I', 'SPT.pdf');
    }
}
