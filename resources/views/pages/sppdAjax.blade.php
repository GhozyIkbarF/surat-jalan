{{-- @extends('layouts.main')
@section('title','Tambah SPPD')
@section('sng','Tambah SPPD')
@section('kpj','Tambah Surat Perintah Perjalanan Dinas')
@section('content') --}}
<div class="card">
    <div class="card-body">
      <div class="d-sm-flex justify-content-between align-items-center">
        <div>
          <h4 class="card-title">Tambah Data SPPD</h4>
        </div>
        <div>
          <a href="datasppd.php">
            <button type="button" class="btn btn-social-icon-text btn-dark">
              <i class="mdi mdi-arrow-left"></i>
                Kembali
            </button>   
          </a>
        </div>
      </div>
      <div class="mt-3">
      <form class="forms-sample">
        <div class="row">
          <div class="col-md-6 grid-margin">
            <div class="form-group">
              <label>Pejabat Pemberi Perintah</label>
              <select class="js-example-basic-multiple w-100" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="AM">America</option>
                <option value="CA">Canada</option>
                <option value="RU">Russia</option>
              </select>
            </div>
            <div class="form-group">
              <label>Pegawai yang Diperintah</label>
              <select class="js-example-basic-multiple w-100" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="AM">America</option>
                <option value="CA">Canada</option>
                <option value="RU">Russia</option>
              </select>
            </div>
            <div class="form-group">
              <label for="golongan">Golongan</label>
              <input type="text" class="form-control" id="golongan" placeholder="Pembina / IV a" disabled>
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" placeholder="Kepala Bidang Tata Kelola Informatika" disabled>
            </div>
            <div class="form-group">
              <label for="tingkat">Tingkat</label>
              <input type="text" class="form-control" id="tingkat" placeholder="-" disabled>
            </div>
            <div class="form-group">
              <label for="maksud">Maksud Perjalanan Dinas</label>
              <input type="text" class="form-control" id="maksud" placeholder="Tulis Maksud Perjalanan Dinas">
            </div>
            <div class="form-group">
              <label for="transportasi">Transportasi</label>
              <input type="text" class="form-control" id="transportasi" placeholder="Tulis Transportasi yang Digunakan">
            </div>
            <div class="form-group">
              <label for="berangkat">Tempat Berangkat</label>
              <input type="text" class="form-control" id="berangkat" placeholder="Tulis Tempat Keberangkatan">
            </div>
            <div class="form-group">
              <label for="tujuan">Tempat Tujuan</label>
              <input type="text" class="form-control" id="tujuan" placeholder="Tulis Tempat Tujuan">
            </div>
          </div>
          <div class="col-md-6 grid-margin">
            <div class="form-group">
              <label for="lama">Lama Perjalanan Dinas</label>
              <input type="text" class="form-control" id="lama" placeholder="Tulis Lamanya Perjalanan Dinas">
            </div>
            <div class="form-group">
              <label for="tglpergi">Tanggal Pergi</label>
              <input type="date" class="form-control" id="tglpergi" placeholder="Pilih Tanggal Kepergian">
            </div>
            <div class="form-group">
              <label for="tglkembali">Tanggal Kembali</label>
              <input type="date" class="form-control" id="tglkembali" placeholder="Pilih Tanggal Kembali">
            </div>
            <div class="form-group">
              <label>Pengikut / NIP</label>
              <select class="js-example-basic-multiple w-100" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="AM">America</option>
                <option value="CA">Canada</option>
                <option value="RU">Russia</option>
              </select>
            </div>
            <div class="form-group">
              <label for="anggaran">Pembebanan Anggaran</label>
              <input type="text" class="form-control" id="anggaran" placeholder="Tulis Pembebanan Anggaran">
            </div>
            <div class="form-group">
              <label for="mataanggaran">Mata Anggaran</label>
              <input type="text" class="form-control" id="mataanggaran" placeholder="Tulis Mata Anggaran">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" placeholder="Tulis Keterangan">
            </div>
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn-primary me-2">Tambah</button>
          <a href="datasppd.php">
            <button type="button" class="btn btn-outline-danger">
                Batal
            </button>   
          </a>
        </div>
      </form>
      </div>
    </div>
  </div>
  {{-- @endsection --}}