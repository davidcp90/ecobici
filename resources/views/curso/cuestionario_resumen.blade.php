@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos descripcion">
	
	<div class="row examen">
	<center>
	@if( count($errors)>0 )
		<div role="alert" class="alert alert-danger alert-dismissible fade in">            
            <p>
            	{!! $error !!}
            </p>
        </div>   
	@else
		<h2 class="ecobici">¡Excelente! Haz respondido el examen completo.</h2>
		<h3 class="ecobici">Tu resultado es:</h3>
		<h4>Respuestas correctas : {!! $correctas !!}</h4>
		<h4>Respuestas incorrectas : {!! $incorrectas !!}</h4>

		@if ( $correctas > 6)
		<center><img src="/assets/img/aprobado.jpg"></center>
		<a class="btn_alcurso" href="/"><span>Regresa al inicio</span></a>
		@else
		<center><img src="/assets/img/reprobado.jpg"></center>
		<a class="btn_alcurso" href="/"><span>Regresa al inicio</span></a>
		<a class="btn_alexamen" href="cuestionario"><span>Vuelve a intentarlo</span></a>
		@endif
	@endif
	</center>
	</div>
</div>
@stop
