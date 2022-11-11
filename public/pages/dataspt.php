<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data SPT</title>
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
            <h1 class="welcome-text">Data SPT <span class="text-black fw-bold">(Surat Perintah Tugas)</span></h1>
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
            <a class="nav-link" href="dashboard.php">
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
          <li class="nav-item nav-category">Master Setting</li>
          <li class="nav-item">
            <a class="nav-link" href="datainstansi.php">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Data Instansi</span>
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
                      <h4 class="card-title">Daftar Data SPT</h4>
                    </div>
                    <div>
                      <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modaltambahspt">
                        Tambah Data
                      </button>
                    </div>
                  </div>
                  <div class="table-responsive mt-3">
                    <table class="table table-striped table-bordered" id="table_spt">
                      <thead>
                        <tr>
                          <td>No</td>
                          <td>Dasar Perintah</td>
                          <td>Pegawai yang Diperintah</td>
                          <td>Golongan</td>
                          <td>NIP</td>
                          <td>Jabatan</td>
                          <td>Maksud Tugas</td>
                          <td>Hari, Tanggal</td>
                          <td>Waktu</td>
                          <td>Tempat</td>
                          <td>Tempat Ditetapkan</td>
                          <td>Tanggal Ditetapkan</td>
                          <td>Yang Menetapkan</td>
                          <td>Aksi</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Perintah Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
                          <td>
                            <p>Hartono, S.Sos, M.M</p>
                            <p>Suparno</p>
                            <p>Yahya Fathoni Amri</p>
                          </td>
                          <td>
                            <p>Pembina / IV a</p>
                            <p>Pengatur Tingkat I / II d</p>
                            <p>-</p>
                          </td>
                          <td>
                            <p>19691015 199003 1 007</p>
                            <p>19731103 199803 1 012</p>
                            <p>-</p>
                          </td>
                          <td>
                            <p>Kepala Bidang Tata Kelola Informatika</p>
                            <p>Analis Sistem Informasi dan Diseminasi Hukum Pada Seksi Persandian dan Keamanan Jaringan</p>
                            <p>Network Analyst</p>
                          </td>
                          <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun</td>
                          <td>Sabtu, 13 Agustus 2022</td>
                          <td>19.30 WIB s.d. selesai</td>
                          <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
                          <td>Karanganyar</td>
                          <td>13 Agustus 2022</td>
                          <td>Drs. SUJARNO, M.Si.</td>
                          <td>
                            <div class="btn-group" role="group">
                              <button type="button" class="btn btn-md btn-primary">
                                <i class="mdi mdi-printer"></i>
                              </button>
                              <button type="button" class="btn btn-md btn-warning" data-bs-toggle="modal" data-bs-target="#modaleditspt">
                                <i class="mdi mdi-tooltip-edit"></i>
                              </button>
                              <button type="button" class="btn btn-md btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusspt">
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

  <!-- Modal Tambah SPT -->
  <div class="modal fade" id="modaltambahspt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data SPT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="forms-sample">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 grid-margin">
              <div class="form-group">
                <label for="dasarperintah">Dasar Perintah Tugas</label>
                <input type="text" class="form-control" id="dasarperintah" placeholder="Tulis Dasar Perintah Tugas">
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
                <label for="jabatan">Maksud Penugasan</label>
                <input type="text" class="form-control" id="maksudtugas" placeholder="Tulis Maksud Penugasan">
              </div>
              <div class="form-group">
                <label for="tgltugas">Hari, Tanggal Penugasan</label>
                <input type="date" class="form-control" id="tgltugas" placeholder="Pilih Tanggal Penugasan">
              </div>
              <div class="form-group">
                <label for="waktutugas">Waktu Penugasan (hari)</label>
                <input type="text" class="form-control" id="waktutugas" placeholder="Tulis Waktu Penugasan">
              </div>
            </div>
            <div class="col-md-6 grid-margin">
              <div class="form-group">
                <label for="tempatpenugasan">Tempat Penugasan</label>
                <input type="text" class="form-control" id="tempatpenugasan" placeholder="Tulis Tempat Penugasan">
              </div>
              <div class="form-group">
                <label for="tempatditetapkan">Tempat Ditetapkan</label>
                <input type="text" class="form-control" id="tempatditetapkan" placeholder="Tulis Tempat Surat Ditetapkan">
              </div>
              <div class="form-group">
                <label for="tglditetapkan">Hari, Tanggal Ditetapkan</label>
                <input type="date" class="form-control" id="tglditetapkan" placeholder="Pilih Tanggal Surat Ditetapkan">
              </div>
              <div class="form-group">
                <div class="row">
                  <label>Yang Menetapkan</label>
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

  <!-- Modal Edit SPT -->
  <div class="modal fade" id="modaleditspt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data SPT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="forms-sample">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 grid-margin">
              <div class="form-group">
                <label for="dasarperintah">Dasar Perintah Tugas</label>
                <input type="text" class="form-control" id="dasarperintah" placeholder="Tulis Dasar Perintah Tugas">
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
                <label for="jabatan">Maksud Penugasan</label>
                <input type="text" class="form-control" id="maksudtugas" placeholder="Tulis Maksud Penugasan">
              </div>
              <div class="form-group">
                <label for="tgltugas">Hari, Tanggal Penugasan</label>
                <input type="date" class="form-control" id="tgltugas" placeholder="Pilih Tanggal Penugasan">
              </div>
              <div class="form-group">
                <label for="waktutugas">Waktu Penugasan (hari)</label>
                <input type="text" class="form-control" id="waktutugas" placeholder="Tulis Waktu Penugasan">
              </div>
            </div>
            <div class="col-md-6 grid-margin">
              <div class="form-group">
                <label for="tempatpenugasan">Tempat Penugasan</label>
                <input type="text" class="form-control" id="tempatpenugasan" placeholder="Tulis Tempat Penugasan">
              </div>
              <div class="form-group">
                <label for="tempatditetapkan">Tempat Ditetapkan</label>
                <input type="text" class="form-control" id="tempatditetapkan" placeholder="Tulis Tempat Surat Ditetapkan">
              </div>
              <div class="form-group">
                <label for="tglditetapkan">Hari, Tanggal Ditetapkan</label>
                <input type="date" class="form-control" id="tglditetapkan" placeholder="Pilih Tanggal Surat Ditetapkan">
              </div>
              <div class="form-group">
                <div class="row">
                  <label>Yang Menetapkan</label>
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
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Hapus SPT -->
  <div class="modal fade" id="modalhapusspt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data SPT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="forms-sample">
        <div class="modal-body">
          <p>Apakah anda yakin untuk menghapusnya?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
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
      $('#table_spt').DataTable();
    } );
  </script>
  <!-- End custom js for this page-->
</body>

</html>

