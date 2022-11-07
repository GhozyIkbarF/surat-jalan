<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>
<body>
  <div class="container-scroller">
    @include('sweetalert::alert')
    <!-- partial:partials/_navbar.html -->
    @section('kpj','Dashboard')
    @include('includes.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      
      <!-- partial:partials/_sidebar.html -->
      @include('includes.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 grid-margin stretch-card">
              @yield('content')
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('includes.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>

