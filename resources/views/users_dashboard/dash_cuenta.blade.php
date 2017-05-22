@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-wrench"></i> Herramientas de Cuenta </h3>
<div class="row mt">
    <div class="col-lg-12 text-center">
        <h3>Datos de la Cuenta</h3>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 mb">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hay problemas con los datos ingresados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">Nombre</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" readonly="" value="$users->name}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="$users->email}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div><!-- /col-md-4-->
</div>
@stop