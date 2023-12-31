{{-- chua noi dung chung --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/template/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/template/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/template/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/template/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/template/admin/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="/css/admin.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper wrap-admin">

  <!-- Navbar -->
 @include('admin.layout.head')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 nav-admin">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/template/admin/dist/img/logo.png" alt="Logo" class="brand-image image-logo  elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FOOD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
       <a href="#" class="d-block"><br>Admin</a>
        </div>
      </div>


    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item buttom-nav">
                <a href="{{route('admin.index')}}" class="nav-link">
                  <i class="far nav-icon "></i>
                  <p>Home</p>
                </a>
              </li>
          
              <li class="nav-item buttom-nav">
                <a href="{{route('category.listCategory')}}" class="nav-link ">
                  <i class="far  nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
              <li class="nav-item buttom-nav">
                <a href="{{route('category.addCategory')}}" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p>ADD Category</p>
                </a>
              </li>
              
              <li class="nav-item buttom-nav">
                <a href="{{route('product.listProduct')}}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>All Product</p>
                </a>
              </li>
              <li class="nav-item buttom-nav">
                <a href="{{route('product.addProduct')}}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>ADD Product</p>
                </a>
              </li>
              <li class="nav-item buttom-nav">
                <a href="{{route('listvoucher')}}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>Voucher</p>
                </a>
              </li>
              <li class="nav-item buttom-nav">
                <a href="{{route('addvoucher')}}" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p>ADD Voucher</p>
                </a>
              </li>
              
              <li class="nav-item buttom-nav">
                 <a href="{{route('user.listUser')}}" class="nav-link"> 
                  <i class="far nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item buttom-nav">
                <a href="{{route('orders')}}" class="nav-link"> 
                  <i class="far nav-icon"></i>
                  <p>List Oders</p>
                </a>
              </li>
              <li class="nav-item buttom-nav">
                <a href="{{route('allcontact')}}" class="nav-link"> 
                  <i class="far nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
          </li>
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Main content -->
   @yield('main-content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/template/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/template/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/template/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/template/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/template/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/template/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/template/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/template/admin/plugins/moment/moment.min.js"></script>
<script src="/template/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/template/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/template/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/template/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/template/admin/dist/js/pages/dashboard.js"></script>
</body>
</html>
