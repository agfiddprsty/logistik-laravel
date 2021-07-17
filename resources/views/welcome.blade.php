<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Divisi Kartu Kredit | BRI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/js/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/assets/js/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/js/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/assets/js/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/css/adminltecss/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/js/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/assets/js/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/assets/js/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
        <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #6c757d;;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 1px;
                color: #085e9b;
                
            }
        </style>
        </head>
<body>
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">
        LOGISTIK  |OPK
        </div>

        <div class="links">
                <a href="https://bri.co.id/">Berita</a>
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/masterbarang') }}">Master Data</a>
                <a href="https://bri.co.id/tentang-bri">Tentang BRI</a>
        </div>

        @if (Route::has('login'))
        <div class="links">
            @auth
                <div class="top-right links">
                <body class="hold-transition sidebar-mini">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    
                                <!-- Sidebar -->
                                <div class="sidebar">
                                <!-- Sidebar user panel (optional) -->
                                <div class="user-panel mt-0 pb-0 mb-0 d-flex">
                                <!-- Brand Logo -->
                                <a href="/#" class="brand-link">
                                <img src="assets/dist/img/AdminLTELogo.jpg" alt="" class="brand-image img-circle elevation-9"
                                    style="opacity: .8">
                                <span class="brand-text font-weight">Selamat Datang!</span>
                                </a>
                                <div class="info">
                                </div>
                                </div>
                                
                                <!-- Sidebar Menu -->
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                                        with font-awesome or any other icon font library -->
                                      <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-user-circle"></i>
                                        <p>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                            <i class="fas fa-angle-right left"></i>
                                        </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                        </ul> 
                                        <ul class="nav nav-treeview">
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <li class="nav-item"> 
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="nav-icon fas fa-sign-out-alt"></i> 
                                                {{ __('Keluar') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        </ul> 
                                      </li>
                                    </li>
                                    </ul>
                                    </ul>
                                </nav>
                                </nav>
                                    
                                    <!-- /.sidebar-menu -->
                                </div>
                            </a>
                        </li>     
                    </ul>       
                </nav>
    
          

            @else
            <div class="top-right links">
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
</div>
<!-- ./wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/js/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/assets/js/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/assets/js/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="/assets/js/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="/assets/js/jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/js/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/assets/js/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/assets/js/moment/moment.min.js"></script>
<script src="/assets/js/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/assets/js/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/assets/js/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/js/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/js/adminltejs/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="/assets/js/adminltejs/js/pages/dashboard2.js></script> -->
<!-- AdminLTE for demo purposes -->
<script src="/assets/js/adminltejs/js/demo.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script src="assets/dist/js/pages/dashboard3.js"></script>
</body>
</html>
