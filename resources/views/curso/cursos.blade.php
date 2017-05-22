@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_curso">
	<div class="row header_curso">
		<img src="/assets/img/header_curso.jpg">
	</div>
	<div class="row">
		<div class="col-md-8 descripcion">
			<p><span class="ecobici">Ecobici</span> te ofrece un curso completamente gratuito para que conozcas los beneficios del servicio, el uso correcto de la bicicleta,las reglas que debes tener en cuenta para
				una buena convivencia dentro del sistema.</p>
			<p>El curso de <span class="ecobici">BiciEscuela</span> está categorizado de 
			acuerdo a las siguientes temáticas que se evaluarán al final del curso para 
			verificar que hayas aprendido lo necesario para ser un buen <span class="ecobici">EcoUsuario.</span></p>
				<ul>
					<li class="ico_cap1">Normatividad del sistema <span class="ecobici">Ecobici</span></li>
					<li class="ico_cap2">Reglamento de tránsito <span class="ecobici">Ecobici</span></li>
					<li class="ico_cap3">Conoce la <span class="ecobici">bicicleta</span></li>
					<li class="ico_cap4">Habilidades básicas en el uso de la <span class="ecobici">bicicleta </span></li>
					<li class="ico_cap5"><span class="ecobici">Ecoestaciones</span> y Rutas <span class="ecobici">Ecobici</span></li>
				</ul>
		</div>
		<div class="col-md-4">
			<center><h1 class="ecobici">¡No esperes más para iniciar el curso ahora!</h1>
			<a href="curso/normatividad"><i class="fa fa-hand-o-down"></i><strong>Haz clic Aquí</strong>
			<div class="curso c1 cap">Capítulo 1: Normatividad</div></a></center>
		</div>		
	</div>
</div>	
	<style type="text/css">
		@media screen 
  			and (min-width:1024px)  
			  and (min-height: 772px){
			    .site-footer{
			      position: absolute;
			      bottom: 0;
			      width: 100%;
    		}
		}
	</style>
@stop