@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-map-marker"></i> Rutas</h3>
<div class="row mt">
  <div class="col-lg-12 text-center">
    <h3>Mapa de las Rutas</h3>
  </div>
    <div class="Map col-lg-12 text-center" id="Mapa">
        <iframe src="https://www.google.com/maps/d/embed?mid=z0zqdwmlol08.kMTByPPNawqo" width="85%" height="400"></iframe>
    </div>
</div>
@stop