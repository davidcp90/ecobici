@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos descripcion">
	<div class="row">
		<h1 class="ecobici ico_cap3 title_c3" style="margin-left:45px;">Conoce la Bicicleta</h1><br>
		<div class="col-md-12">
			<article>
				<p>Existen diferentes tipos de <span class="ecobici_p">bicicletas</span>, pero básicamente todas son similares, 
				aunque los componentes difieran en calidad, diseño y peso, así como en la agilidad 
				y modalidad de uso.</p>
				<p>En orden de importancia, una <span class="ecobici_p">bicicleta</span> está formada por los siguientes componentes:</p>
			</article><br>
		</div>
		<div class="col-md-12 container_bici">
			<center><img src="/assets/img/bicicleta.png"></center>
		</div>
	</div>

	<div class="row footer_bicicleta">
		<div class="col-xs-8 col-md-4">
			<center><h1 class="ecobici">Continua con el siguiente capítulo</h1>
			<a href="habilidades"><i class="fa fa-hand-o-down"></i><strong>Haz clic Aquí</strong>
			<div class="curso c4 cap">Capítulo 4: Habilidades</div></a></center>
		</div>
		<div class="col-xs-4 col-md-8"></div>
	</div>
</div>	
@stop