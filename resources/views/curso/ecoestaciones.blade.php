@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos">
	<div class="row">
		<h1 class="ecobici ico_cap5 title_c5" style="margin-left:45px;">EcoEstaciones y Rutas Ecobici</h1><br>
		<article>
			<p><span class="ecobici_p">Ecobici</span> cuenta con una amplia red de <span class="ecobici_p">EcoEstaciones</span>
			donde puedes registrarte y empezar a usar <span class="ecobici_p">las bicicletas</span> que tenemos a disposición para ti.</p>
			<p>Puedes consultar tus recorridos desde tu dispositivo móvil, para que siempre estés ubicado y controlando 
			tus gastos.</p>
		</article>
	</div>
	
	<div class="row eco_separador"></div>
	
	<div class="row">
		<div class="col-md-12 ecobici">
			<center><h1>¿Listo? Estás preparado para demostrar el conocimiento aprendido</h1>
			<h3>Debes certificar que has aprendido</h3>
			<a class="active" href="{!! route('cuestionario.index') !!}">
	            <i class="fa fa-graduation-cap"></i>
	            <h1>Realiza el examen</h1>
	        </a>
			</center>
		</div>
	</div>

	<div class="row">
		<center><h1 class="ecobici">Tambien puedes descargar los capítulos</h1>
		<div class="col-md-12">
			<ul>
				@forelse( $cursos as $curso )
					<li class="curso col-sm-3 {!! $curso->sigla !!}"><a href="{!! asset('ecoescuela/'.$curso->file) !!}">{!! $curso->nombre !!}</a></li>
				@empty
					<div role="alert" class="alert alert-warning alert-dismissible fade in">            
			            <p>
			            	No existen cursos en el sistema
			            </p>
			        </div>   
				@endforelse
			</ul>
		</div></center>
	</div>

@stop