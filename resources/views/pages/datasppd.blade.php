@extends('layouts.main')
@section('title','Data SPPD')

@section('content')
<div class="card">
    <div class="card-body">
      <div class="d-sm-flex justify-content-between align-items-center">
        <div>
          <h4 class="card-title">Daftar Data NPPD</h4>
        </div>
        <div>
          <a href="tambahdatasppd.php">
            <button type="button" class="btn btn-success btn-md">
              Tambah Data
            </button>
          </a>
        </div>
      </div>
      <div class="table-responsive mt-3">
        <table class="table table-bordered display" id="table_sppd">
          <thead>
            <tr>
              <td>No</td>
              <td>Penugasan Kepada</td>
              <td>Golongan</td>
              <td>Tujuan</td>
              <td>Maksud Perjalanan Dinas</td>
              <td>Tgl. Pergi s.d. Tgl. Kembali</td>
              <td>Lama</td>
              <td>Status</td>
              <td>Aksi</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <p>1. Kurniawan Hadiputra, S.E.</p>
                <p>2. Agus Hatorangan, S.Ag.</p>
              </td>
              <td>
                <p>Golongan III</p>
                <p>Golongan III</p>
              </td>
              <td>Kec. Rangsang</td>
              <td>Membeli Kue Tahun Baru</td>
              <td>20-04-2021 s.d. 25-04-2021</td>
              <td>5 hari</td>
              <td>Cek</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-md btn-primary">
                    <i class="mdi mdi-printer"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-warning">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </button>
                  <button type="button" class="btn btn-md btn-danger">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection