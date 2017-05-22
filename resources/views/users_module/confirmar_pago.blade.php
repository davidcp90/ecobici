@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('title')
    Editar usuario: {{ $user->name }}
@stop
@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-visa"></i> Confirmar pago: {{ $user->name }}</h3>
@include('users_module.partials.messages')
<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
    <h4 class="mb">Ingrese el numero de confirmacion de pago (numero entre 0 y 2147483647)</h4>
      {!! Form::open(['route' => ['guardar-pago'], 'method' => 'POST' , 'class' => 'form-horizontal style-form']) !!}
      <input type="hidden" name="user" value="{{ $user->id }}">
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs"># de Confirmación de Pago *</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" placeholder="Ingrese numero de confirmación" name="confirmacion_pago" class="form-control" >
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-xs-1">
          </div>
          <div class="col-sm-4 col-xs-10">
            <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-save"> </i> Guardar</button>
          </div>
          </div>

        {!! Form::close() !!}
    </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop
