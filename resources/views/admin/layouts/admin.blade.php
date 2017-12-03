<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Levis Band Hunt Tools</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('/levis-tools')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Levi's</b>&#174;</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Levi's</b><i style="font-size:12px; vertical-align:top">&#174;</i> Band Hunt</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">{{Auth::guard('web_admin')->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ url('/levis-tools/logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Sign out
                  </a>

                  <form id="logout-form" action="{{ url('/levis-tools/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{$page == 'dashboard' ? 'active' : ''}}"><a href="{{url('/levis-tools')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="{{$page == 'top32' ? 'active' : ''}}"><a href="{{url('/levis-tools/top32')}}"><i class="fa fa-user"></i> <span>Top 32</span></a></li>
        <li class="{{$page == 'leaderboard' ? 'active' : ''}}"><a href="{{url('/levis-tools/leaderboard')}}"><i class="fa fa-bar-chart"></i> <span>Leaderboard</span></a></li>
        <li class="{{$page == 'chart' ? 'active' : ''}}"><a href="{{url('/levis-tools/chart')}}"><i class="fa fa-bar-chart"></i> <span>Chart Band</span></a></li>
        <li class="{{$page == 'share' ? 'active' : ''}}"><a href="{{url('/levis-tools/share')}}"><i class="fa fa-bar-chart"></i> <span>Share Social</span></a></li>
        <li class="{{$page == 'daily' ? 'active' : ''}}"><a href="{{url('/levis-tools/daily')}}"><i class="fa fa-bar-chart"></i> <span>Daily Chart</span></a></li>
        <li class="{{$page == 'users' ? 'active' : ''}}"><a href="{{url('/levis-tools/users')}}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li class="{{$page == 'bands' ? 'active' : ''}}"><a href="{{url('/levis-tools/bands')}}"><i class="fa fa-user"></i> <span>Bands</span></a></li>
        <li class="{{$page == 'songs' ? 'active' : ''}}"><a href="{{url('/levis-tools/songs')}}"><i class="fa fa-music"></i> <span>Songs</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> 2.3.8 -->
    </div>
    Levi's&#174; Band Hunt
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<script src="{{asset('backend/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('backend/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backend/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/app.min.js')}}"></script>
@yield('footer')
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('backend/dist/js/demo.js')}}"></script> -->
</body>
</html>
