<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ecobici">
    <meta name="keyword" content="Login Ecobici">
    <title>Ecobici</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}">
    <!--external css-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
        <div class="container">
                                <div class="centered logo-login">
                                    <img src="{{ URL::asset('assets/img/ecobici-logo.png') }}" alt="Ecobici">
                                </div>
                                <div class="well col-xs-6 col-xs-offset-3" style="background:rgba(255,255,255,0.7) !important">
                                <h2 class="text-success">Bienvenido a Ecobici:</h4>
                                    <ul>
                  <li><a href="/login">Inicio Sesión</a></li>
                  <li><a href="/auth/register">Registro</a></li>
              </ul>
                                </div>

        </div>
      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("{{ URL::asset('assets/img/login-bg.jpg') }}", {speed: 500});
    </script>


  </body>
</html>
