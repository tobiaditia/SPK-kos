<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ '/plugins/fontawesome-free/css/all.min.css' }} ">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ '/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' }} ">
  <link rel="stylesheet" href="{{ '/plugins/icheck-bootstrap/icheck-bootstrap.min.css' }} ">
  <link rel="stylesheet" href="{{ '/plugins/jqvmap/jqvmap.min.css' }} ">
  <link rel="stylesheet" href="{{ '/dist/css/adminlte.min.css' }} ">
  <link rel="stylesheet" href="{{ '/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' }} ">
  <link rel="stylesheet" href="{{ '/plugins/daterangepicker/daterangepicker.css' }} ">
  <link rel="stylesheet" href="{{ '/plugins/summernote/summernote-bs4.css' }} ">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ '/dist/img/AdminLTELogo.png' }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ '/dist/img/user2-160x160.jpg' }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="/admin/kos" class="nav-link  {{ Request::segment(2) == 'kos' ? 'active' : '' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Kos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/fasilitas" class="nav-link {{ Request::segment(2) == 'fasilitas' ? 'active' : '' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Fasilitas
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

</div>
<!-- ./wrapper -->


<script src=" {{ '/plugins/jquery/jquery.min.js' }}"></script>
<script src=" {{ '/plugins/jquery-ui/jquery-ui.min.js' }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src=" {{ '/plugins/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<script src=" {{ '/plugins/chart.js/Chart.min.js' }}"></script>
<script src=" {{ '/plugins/sparklines/sparkline.js' }}"></script>
<script src=" {{ '/plugins/jqvmap/jquery.vmap.min.js' }}"></script>
<script src=" {{ '/plugins/jqvmap/maps/jquery.vmap.usa.js' }}"></script>
<script src=" {{ '/plugins/jquery-knob/jquery.knob.min.js' }}"></script>
<script src=" {{ '/plugins/moment/moment.min.js' }}"></script>
<script src=" {{ '/plugins/daterangepicker/daterangepicker.js' }}"></script>
<script src=" {{ '/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' }}"></script>
<script src=" {{ '/plugins/summernote/summernote-bs4.min.js' }}"></script>
<script src=" {{ '/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' }}"></script>
<script src=" {{ '/dist/js/adminlte.js' }}"></script>
<script src=" {{ '/dist/js/pages/dashboard.js' }}"></script>
<script src=" {{ '/dist/js/demo.js' }}"></script>
</body>
</html>
