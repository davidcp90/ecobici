@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-dashboard"></i> Dashboard</h3>
<div class="row mt">
  <div class="col-lg-12">
  <div class="jumbotron" id="mijumbo">
    <div class="row" align="center">
    	<div class="col-lg-6">
    		<h1><span class="glyphicon glyphicon-user"></span></h1>
    	</div>
    	<div class="col-lg-6">
    		<h2>Bienvenido {{ Auth::user()->name }}</h2>
    		<h5>Estado:{{ Auth::user()->usuario_aprobado }}</h5>
    	</div>
   	</div>
</div>
<div  id="mijumbo" align="center">
	<div class="text-center">
		<div style="display: inline-block">
			<a type="button" class="btn btn-theme" href="{{ url('/editar-usuario')}}"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Actualizar Datos de Perfil</a>
		</div>			
		<div style="display: inline-block">
       		<a type="button" class="btn btn-theme" href="{{ url('/historial/pagos')}}"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Mis estadisticas</a>
		</div>
	</div>
	  
</div>
<div class="row mt">
  <div class="col-lg-12 text-center">
    <h3>Ultimo Recorrido</h3>
  </div>
  <div class="col-lg-8 col-md-10 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 mb">
    <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th><i class="fa fa-calendar"></i> Fecha</th>
            <th><i class="fa fa-clock-o"></i> Hora Inicio</th>
            <th><i class="fa fa-clock-o"></i> Hora Final</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($prestamos as $prestamo)
            <tr>
              <th>{{ $prestamo->created_at->year}}-{{ $prestamo->created_at->month}}-{{ $prestamo->created_at->day}}</th>
              <th>{{ $prestamo->created_at->hour }}:{{ $prestamo->created_at->minute }}:{{ $prestamo->created_at->second }}</th>
              <th>{{ $prestamo->updated_at->hour }}:{{ $prestamo->updated_at->minute }}:{{ $prestamo->updated_at->second }}</th>
            </tr>
            @endforeach
          <!-- TODO-->
        </tbody>
    </table>
  </div><!-- /col-md-4-->
</div>

  </div>
</div>
@stop