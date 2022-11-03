<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data NPPD</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" />
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
      <div class="navbar-menu-wrapper d-flex align-items-top">
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
            <a class="nav-link" href="pages/datasppd.php">
              <i class="mdi mdi mdi-file-multiple menu-icon"></i>
              <span class="menu-title">Data SPPD</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
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
                      <h4 class="card-title">Data NPPD</h4>
                      <small class="text-muted">Nota Permintaan Perjalanan Dinas</small>
                    </div>
                    <div>
                      <button type="button" class="btn btn-success btn-md">
                        Tambah Data
                      </button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready( function () {
      $('#table_sppd').DataTable();
    } );
  </script>
  <!-- End custom js for this page-->
</body>

</html>

