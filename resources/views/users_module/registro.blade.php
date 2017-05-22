@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('title')
    Registro de usuarios - Paso 1: Datos Basicos
@stop
@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-users"></i> Registro de usuarios - Paso 1: Datos Basicos</h3>
@include('users_module.partials.messages')
<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb">Ingrese los datos del usuario</h4>

      {!! Form::open(['route' => 'crear-cliente', 'method' => 'POST' , 'class' => 'form-horizontal style-form']) !!}
        @include('users_module.partials.user_fields')
        {!! Form::close() !!}
    </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop
