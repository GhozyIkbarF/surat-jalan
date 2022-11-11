<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
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
            <h1 class="welcome-text text-black fw-bold">Dashboard</h1>
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
          <div class="row flex-grow">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card bg-primary card-rounded">
                <div class="card-body pb-3">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title card-title-dash text-white mb-4">Data SPPD</h4>
                      <p class="text-light mb-1">Jumlah Data SPPD</p>
                      <h2 class="text-light">666</h2>
                    </div>
                    <div class="col align-self-center">
                      <a href="datasppd.php">
                        <button type="button" class="btn btn-outline-dark btn-icon-text">
                          <i class="ti-file btn-icon-prepend"></i>
                          Lihat
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card bg-danger card-rounded">
                <div class="card-body pb-3">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title card-title-dash text-white mb-4">Data SPT</h4>
                      <p class="text-light mb-1">Jumlah Data SPT</p>
                      <h2 class="text-light">420</h2>
                    </div>
                    <div class="col align-self-center">
                      <a href="dataspt.php">
                        <button type="button" class="btn btn-outline-dark btn-icon-text">
                          <i class="ti-file btn-icon-prepend"></i>
                          Lihat
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row flex-grow">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card bg-success card-rounded">
                <div class="card-body pb-3">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title card-title-dash text-white mb-4">Data Penerimaan Uang</h4>
                      <p class="text-light mb-1">Jumlah Data Penerimaan Uang</p>
                      <h2 class="text-light">888</h2>
                    </div>
                    <div class="col align-self-center">
                      <a href="datauang.php">
                        <button type="button" class="btn btn-outline-dark btn-icon-text">
                          <i class="ti-file btn-icon-prepend"></i>
                          Lihat
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card bg-warning card-rounded">
                <div class="card-body pb-3">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title card-title-dash text-dark mb-4">Data Pegawai</h4>
                      <p class="status-summary-ight-white mb-1">Jumlah Data Pegawai</p>
                      <h2 class="text-dark">555</h2>
                    </div>
                    <div class="col align-self-center">
                      <a href="datapegawai.php">
                        <button type="button" class="btn btn-outline-dark btn-icon-text">
                          <i class="ti-file btn-icon-prepend"></i>
                          Lihat
                        </button>
                      </a>
                    </div>
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

  <!-- Modal Edit Data Instansi -->
  <div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Instansi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="forms-sample">
        <div class="modal-body">
          <form class="forms-sample">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="Nama">Nama Instansi</label>
                  <input type="text" class="form-control" id="nama" placeholder="Dinas Komunikasi dan Informatika Kabupaten Karanganyar" disabled>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="Keterangan">Keterangan Instansi</label>
                  <input type="text" class="form-control" id="keterangan" placeholder="" disabled>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="Alamat">Alamat Instansi</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Jl. Lawu No. 385 B Karanganyar" disabled>
                </div>
                <div class="form-group">
                  <label for="Lokasi">Kota/Kabupaten Instansi</label>
                  <input type="text" class="form-control" id="lokasi" placeholder="Kabupaten Karanganyar" disabled>
                </div>
                <div class="form-group">
                  <label for="Kode Pos">Kode Pos</label>
                  <input type="text" class="form-control" id="kodepos" placeholder="57712" disabled>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="Faks">Faks Instansi</label>
                  <input type="text" class="form-control" id="faks" placeholder="(0721) 495590" disabled>
                </div>
                <div class="form-group">
                  <label for="Telepon">Telp Instansi</label>
                  <input type="text" class="form-control" id="telepon" placeholder="(0271) 495039" disabled>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="Pimpinan Tertinggi">Pimpinan Tertinggi Instansi</label>
                  <input type="text" class="form-control" id="pimpinan" placeholder="Kepala Dinas" disabled>
                </div>
                <div class="form-group">
                  <label for="Nama Pimpinan">Nama Pimpinan Tertinggi Instansi</label>
                  <input type="text" class="form-control" id="namapimpinan" placeholder="Drs. Sujarno, M.Si." disabled>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="NIP Pimpinan">NIP Pimpinan Tertinggi Instansi</label>
                  <input type="text" class="form-control" id="nippimpinan" placeholder="19630107 199003 1 004" disabled>
                </div>
                <div class="form-group">
                  <label for="Jabatan Pimpinan">Jabatan Pimpinan Tertinggi Instansi</label>
                  <input type="text" class="form-control" id="jabatanpimpinan" placeholder="Pembina Utama Muda" disabled>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
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
  <script src="../../vendors/select2/select2.min.js"></script>
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
  <script src="../../js/select2.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script>
    $(document).ready( function () {
      $('#table_sppd').DataTable();
    } );
  </script>
  <!-- End custom js for this page-->
</body>

</html>

