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
					<img src="{{ URL::asset('assets/img/ecobici-logo.png') }}" alt="Ecobici">
				</div>
				<div class="form-login">
					<h2 class="form-login-heading">Iniciar Sesión</h2>
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> Hay algún problema con los datos ingresados.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<form role="form" method="POST" action="{{ url('/auth/login') }}" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="login-wrap">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">		            <br>
							<input type="password" class="form-control" name="password" placeholder="Password">		            <br>
							<button class="btn btn-theme btn-block" href="index.html" id="loggearse" type="submit"><i class="fa fa-lock"></i> INICIAR SESIÓN</button>
							<label class="checkbox">
								<span class="pull-right">
									<input type="checkbox" name="remember"> Recordarme
								</span>
							</label>
							<label class="checkbox">
								<span class="pull-right">
									<a data-toggle="modal" href="login.html#myModal"> ¿Olvido su contraseña?</a>
								</span>
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
				          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                  <form role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Recuperar Contraseña</h4>
		                      </div>
		                      <div class="modal-body">
		                      					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> El correo ingresado no es correcto.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
		                          <p>Ingrese su email para recuperar su contraseña.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix"/>

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
		                          <button class="btn btn-theme" type="submit">Enviar</button>
		                      </div>
		                      </form>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
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