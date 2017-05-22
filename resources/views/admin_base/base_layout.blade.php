 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ecobici">
    <meta name="keyword" content="Dashboard Ecobici">
    <title>Ecobici Bogota - @yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style_curso.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/favicon-ecobici.png') }}">
    <!--external css-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg no-print">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><img src="/assets/img/logo.png" class="logo-eco" alt="Ecobici"><b>Dashboard</b></a>
        <!--logo end-->
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
          </ul>
        </div>
      </header>
      <!--main content start-->
       @yield('sidebar')
      <section id="main-content">
        <section class="wrapper site-min-height">
         @yield('content')
        </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
          <div class="text-center">
            2015 © <img src="/assets/img/logo.png" class="footer-logo-eco" alt="Ecobici"> Bogotá
            <a href="#" class="go-top">
              <i class="fa fa-angle-up"></i>
            </a>
          </div>
        </footer>
        <!--footer end-->
      </section>
      <!-- js placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.scrollTo.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.nicescroll.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/common-scripts.js') }}"></script>
      <!--script for this page-->
      @yield('scripts')
    </body>
    <style type="text/css">
      @media print{
        .no-print{
          display: none;
        }
      }
    </style>
  </html>