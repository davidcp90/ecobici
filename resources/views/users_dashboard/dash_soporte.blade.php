@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@extends('admin_base.base_layout')
@section('content')
<div class="row mt">
  <div class="col-lg-12">
    <h4 class="">Soporte</h4>
     <div class="form-panel">
      {!! Form::open(['route' => ['crear-soporte'], 'method' => 'POST' , 'class' => 'form-horizontal style-form']) !!}
        @include('users_module.partials.user_fields_edit3')
        {!! Form::close() !!}
    </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop
