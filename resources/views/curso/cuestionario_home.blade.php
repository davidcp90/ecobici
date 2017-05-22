@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos descripcion">
	<center><h1 class="ecobici title_examen">Realiza el examen</h1>
	<div class="container_examen">
		<img src="/assets/img/examen.jpg">
	</div>
	<p>Después de realizar el curso y de haber aprendido todo lo necesario para poder usar el sistema Ecobici, estás preparado para
	presentar el examen de Diagnóstico de Conocimientos. </p>
	<p>Haz clic en el siguiente enlance para realizar el examen:</p>
	<ul class="ecobici_p title_examen">
		@foreach( $cuestionarios as $cuestionario )
			<li><a href="{!! route('cuestionario', [$cuestionario->id, $cuestionario->preguntas()->first()]) !!}">{!! $cuestionario->nombre !!}</a></li>
		@endforeach
	</ul>
</center>	
@stop