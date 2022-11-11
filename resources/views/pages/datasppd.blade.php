@extends('index')
@section('title','Daftar Data SPPD')
@section('sng','Data SPPD')
@section('kpj','Surat Perintah Perjalanan Dinas')
@section('content')
<div class="card">
    <div class="card-body">
      <div class="d-sm-flex justify-content-between align-items-center">
        <div>
          <h4 class="card-title">Daftar Data SPPD</h4>
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
        <table class="table table-striped table-bordered" id="table_sppd">
          <thead>
            <tr>
              <td rowspan="2">No</td>
              <td rowspan="2">Pejabat Pemberi Perintah</td>
              <td rowspan="2">Pegawai yang Diperintah</td>
              <td rowspan="2">Golongan</td>
              <td rowspan="2">Jabatan</td>
              <td rowspan="2">Tingkat</td>
              <td rowspan="2">Maksud Perjalanan Dinas</td>
              <td rowspan="2">Transportasi</td>
              <td rowspan="2">Tempat Berangkat</td>
              <td rowspan="2">Tempat Tujuan</td>
              <td rowspan="2">Lama Perjalanan</td>
              <td rowspan="2">Tgl. Pergi</td>
              <td rowspan="2">Tgl. Kembali</td>
              <td rowspan="2">Pengikut / NIP</td>
              <td colspan="2">Pembebanan Anggaran</td>
              <td rowspan="2">Keterangan</td>
              <td rowspan="2">Aksi</td>
            </tr>
            <tr>
              <td>Instansi</td>
              <td>Mata Anggaran</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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
              <td>Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
              <td>Hartono, S.Sod, M.M / 19691015 199003 1 007</td>
              <td>Pembiina / IV a</td>
              <td>kepala Bidang Tata Kelola Informatika</td>
              <td>-</td>
              <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
              <td>Kendaraan Dinas</td>
              <td>Karanganyar</td>
              <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
              <td>1 hari</td>
              <td>13 Agustus 2022</td>
              <td>13 Agustus 2022</td>
              <td>
                <p>Suparno / 19731103 199803 1 012</p>
                <p>Yahya Fathoni Amri, S.Kom / -</p>
              </td>
              <td>Dinas Kominfo Kabupaten Karanganyar</td>
              <td>APBD TA 2022</td>
              <td>-</td>
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