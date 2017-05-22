@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('title')
    Editar usuario: {{ Auth::user()->name }}
@stop
@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-users"></i> Editar usuario: {{ Auth::user()->name }}</h3>
@include('users_module.partials.messages')
<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb">Ingrese los datos del usuario</h4>
      {!! Form::open(['route' => ['editar-cliente2'], 'method' => 'POST' , 'class' => 'form-horizontal style-form']) !!}
        @include('users_module.partials.user_fields_edit2')
        {!! Form::close() !!}
    </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop
