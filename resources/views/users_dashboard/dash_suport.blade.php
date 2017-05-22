@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="row mt">
  <div class="col-lg-12 text-center">
    <h3>¿En que podemos ayudarte?</h3>
  </div>
    <div class="Map col-lg-12 text-center">
       <div  id="mijumbo" align="center">
		<div class="text-center">
		<div style="display: inline-block">
			<a type="button" class="btn btn-theme" href="{{ url('/queja')}}"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Quejas</a>
		</div>			
		<div style="display: inline-block">
       		<a type="button" class="btn btn-theme" href="{{ url('/soporte')}}"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Soporte Tecnico</a>
		</div>
		<div style="display: inline-block">
       		<a type="button" class="btn btn-theme" href="{{ url('/sujerencia')}}"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Sugerencias</a>
		</div>
	</div>
	  
</div>
    </div>
</div>
@stop