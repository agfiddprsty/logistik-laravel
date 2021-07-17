<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
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

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="mt-0 pb-0 mb-0 d-flex">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <span class="brand-text font-weight-bold">Dashboard</span>
      </a>
      <div class="info">
      </div>
    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>     
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                Akun
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboardcalendar" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Kalendar
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
            </ul> 
            <ul class="nav nav-treeview">
              <li class="nav-item"> 
                <a classopdown-item" href="{{ route('logout') }}"
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
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Stok Gudang</h3>
                </div>
              </div>

              <div class="progress-group">
                      Alat Tulis Kantor
                      <span class="float-right"><b>{{ $atknow }}</b>/1000</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: {{$persenatk}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      IT
                      <span class="float-right"><b>{{$itnow}}</b>/1000</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: {{$persenit}}%"></div>
                      </div>
                    </div>

                    <div class="progress-group">
                      Elektronik
                      <span class="float-right"><b>{{$eleknow}}</b>/1000</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: {{$persenelek}}%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Lain-Lain</span>
                      <span class="float-right"><b>{{$lainnow}}</b>/1000</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: {{$persenlain}}%"></div>
                      </div>
                    </div>

            </div>            
          </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Barang Yang Baru Ditambahkan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <!-- /.item -->
                  @if(count($barangmasuk) > 0)
                    @foreach($barangmasuk as $key => $bm)
                  <li class="item">
                    <div class="product-img">
                      @if($bm->kategori_brg == 'IT')
                      <i class="fa fa-desktop img-size-50" aria-hidden="true"></i>
                      <!-- <img src="assets/dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> -->
                      @elseif($bm->kategori_brg == 'Elektronik')
                      <i class="fa fa-bolt img-size-50" aria-hidden="true"></i>
                      @elseif($bm->kategori_brg == 'Alat Tulis Kantor')
                      <i class="fa fa-book img-size-50" aria-hidden="true"></i>
                      @elseif($bm->kategori_brg == 'Lain-lain')
                      <i class="fa fa-list-alt img-size-50" aria-hidden="true"></i>
                      @endif
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{ $bm->nama_brg }}
                        @if($bm->kategori_brg == 'IT')
                        <span class="badge badge-danger float-right">{{ $bm->jmlh_brg }}</span></a>
                        @elseif($bm->kategori_brg == 'Elektronik')
                        <span class="badge badge-success float-right">{{ $bm->jmlh_brg }}</span></a>
                        @elseif($bm->kategori_brg == 'Alat Tulis Kantor')
                        <span class="badge badge-primary float-right">{{ $bm->jmlh_brg }}</span></a>
                        @elseif($bm->kategori_brg == 'Lain-lain')
                        <span class="badge badge-warning float-right">{{ $bm->jmlh_brg }}</span></a>
                        @endif
                      <span class="product-description">
                        {{ $bm->kategori_brg }}
                      </span>
                    </div>
                  </li>
                  @endforeach
                  @endif
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            
            </div>
            <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Barang Yang Baru Keluar</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <!-- /.item -->
                  @if(count($barangkeluar) > 0)
                    @foreach($barangkeluar as $key => $bk)
                  <li class="item">
                    <div class="product-img">
                      @if($bk->kategori_brg == 'IT')
                      <i class="fa fa-desktop img-size-50" aria-hidden="true"></i>
                      <!-- <img src="assets/dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> -->
                      @elseif($bk->kategori_brg == 'Elektronik')
                      <i class="fa fa-bolt img-size-50" aria-hidden="true"></i>
                      @elseif($bk->kategori_brg == 'Alat Tulis Kantor')
                      <i class="fa fa-book img-size-50" aria-hidden="true"></i>
                      @elseif($bk->kategori_brg == 'Lain-lain')
                      <i class="fa fa-list-alt img-size-50" aria-hidden="true"></i>
                      @endif
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{ $bk->nama_brg }}
                        @if($bk->kategori_brg == 'IT')
                        <span class="badge badge-danger float-right">{{ $bk->jmlh_brg }}</span></a>
                        @elseif($bk->kategori_brg == 'Elektronik')
                        <span class="badge badge-success float-right">{{ $bk->jmlh_brg }}</span></a>
                        @elseif($bk->kategori_brg == 'Alat Tulis Kantor')
                        <span class="badge badge-primary float-right">{{ $bk->jmlh_brg }}</span></a>
                        @elseif($bk->kategori_brg == 'Lain-lain')
                        <span class="badge badge-warning float-right">{{ $bk->jmlh_brg }}</span></a>
                        @endif
                      <span class="product-description">
                        {{ $bk->kategori_brg }}
                      </span>
                    </div>
                  </li>
                  @endforeach
                  @endif
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            
            </div>
          
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 
</div>
<!-- ./wrapper -->
<script>
  
  var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type                : 'line',
        data                : [100, 120, 170, 167, 180, 177, 160],
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
        {
          type                : 'line',
          data                : [60, 80, 70, 67, 80, 77, 100],
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
</script>
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
<!-- jQuery Mapael -->
<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script src="assets/dist/js/pages/dashboard3.js"></script>
<script src="assets/dist/js/pages/dashboard2.js"></script>
</body>
</html>
