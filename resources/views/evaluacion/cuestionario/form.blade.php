@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('content')
<h3><i class="fa fa-file-text"></i> Registro de cuestionarios</h3>
<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb">Ingrese los datos del cuestionario</h4>
      <form class="form-horizontal style-form" action="/admin/cuestionarios" method="post">
      {!! csrf_field() !!}
      @if (isset($cuestionario))
          <input type="hidden" name="id" value="{{$cuestionario->id}}"/>
      @endif
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Nombre del Cuestionario *</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" name="nombre" placeholder="Ingrese el Nombre del Cuestionario" class="form-control" value="{{$cuestionario->nombre or ''}}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Puntaje minimo para pasar la evaluacion *</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" name="puntaje" placeholder="" class="form-control" value="{{$cuestionario->puntaje or '0'}}">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-xs-1">
          </div>
          <div class="col-sm-4 col-xs-10">
            <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
            <a href="/admin/cuestionarios" class="btn btn-lg btn-default"><i class="fa fa-times"> </i> Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop
