<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data SPPD</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- Multiple Select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <!-- datatables -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="/">
            <img src="../images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="/">
            <img src="../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Data SPPD <span class="text-black fw-bold">(Surat Permintaan Perjalanan Dinas)</span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Master Data</li>
          <li class="nav-item">
            <a class="nav-link" href="datasppd.php">
              <i class="mdi mdi mdi-file-multiple menu-icon"></i>
              <span class="menu-title">Data SPPD</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dataspt.php">
              <i class="mdi mdi mdi-file-multiple menu-icon"></i>
              <span class="menu-title">Data SPT</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datauang.php">
              <i class="mdi mdi mdi-file-multiple menu-icon"></i>
              <span class="menu-title">Data Penerimaan Uang</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datapegawai.php">
              <i class="mdi mdi-human-male-female menu-icon"></i>
              <span class="menu-title">Data Pegawai</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-cash-multiple menu-icon"></i>
              <span class="menu-title">Data Biaya</span>
            </a>
          </li>
          <li class="nav-item nav-category">Master Laporan</li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-paperclip menu-icon"></i>
              <span class="menu-title">Data Laporan</span>
            </a>
          </li>
          <li class="nav-item nav-category">Master Setting</li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Data Setting</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="card-title">Daftar Data SPPD</h4>
                    </div>
                    <div>
                      <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalsppd">
                        Tambah Data
                      </button>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
                          <td>Pembina / IV a</td>
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
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Modal SPPD -->
  <div class="modal fade" id="modalsppd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data SPPD</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="forms-sample">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 grid-margin">
              <div class="form-group">
                <div class="row">
                  <label>Pejabat Pemberi Perintah</label>
                </div>
                <div class="row">
                  <select class="selectpicker" multiple data-live-search="true" placeholder="Pilih Pejabat">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="AM">America</option>
                    <option value="CA">Canada</option>
                    <option value="RU">Russia</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label>Pegawai yang Diperintah</label>
                </div>
                <div class="row">
                  <select class="selectpicker" multiple data-live-search="true" placeholder="Pilih Pegawai">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="AM">America</option>
                    <option value="CA">Canada</option>
                    <option value="RU">Russia</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="golongan">Golongan Pegawai yang Diperintah</label>
                <input type="text" class="form-control" id="golongan" placeholder="-" disabled>
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan Pegawai yang Diperintah</label>
                <input type="text" class="form-control" id="jabatan" placeholder="-" disabled>
              </div>
              <div class="form-group">
                <label for="tingkat">Tingkat Pegawai yang Diperintah</label>
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
            </div>
            <div class="col-md-6 grid-margin">
              <div class="form-group">
                <label for="tujuan">Tempat Tujuan</label>
                <input type="text" class="form-control" id="tujuan" placeholder="Tulis Tempat Tujuan">
              </div>
              <div class="form-group">
                <label for="lama">Lama Perjalanan Dinas (hari)</label>
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
                <div class="row">
                  <label>Pengikut</label>
                </div>
                <div class="row">
                  <select class="selectpicker" multiple data-live-search="true" placeholder="Pilih Pegawai Pengikut">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="AM">America</option>
                    <option value="CA">Canada</option>
                    <option value="RU">Russia</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="anggaran">Pembebanan Anggaran Instansi</label>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- Multiple Select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
  <!-- datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#table_sppd').DataTable();
    } );
  </script>
  <!-- End custom js for this page-->
</body>

</html>

