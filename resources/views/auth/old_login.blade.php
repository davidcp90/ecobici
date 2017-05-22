<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ecobici">
    <meta name="keyword" content="Login Ecobici">
    <title>Ecobici Login</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
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

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
                                <div class="centered logo-login">
                                    <img src="{{ URL::asset('assets/img/logo.png') }}" alt="Ecobici">
                                </div>
		      {!! Form::open(['route' => 'auth/login', 'class' => 'form-login']) !!}
		        <h2 class="form-login-heading">Iniciar Sesión</h2>
		        <div class="login-wrap">
                                        {!! Form::email('email', '', ['class'=> 'form-control','placeholder'=>'Usuario']) !!}
		            <br>
		            <input type="password" class="form-control" placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> ¿Olvido su contraseña?</a>

		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> INICIAR SESIÓN</button>
		        </div>

		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Recuperar Contraseña</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Ingrese su email para recuperar su contraseña.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
		                          <button class="btn btn-theme" type="button">Enviar</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

		      {!! Form::close() !!}

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