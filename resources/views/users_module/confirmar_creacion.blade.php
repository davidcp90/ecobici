@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@extends('admin_base.base_layout')
@section('content')
  @if ( ! empty($success))
          <div class="alert alert-success" role="alert">
            <p>El registro se creo correctamente</p>
            <ul>
              <li>{{ $success}}</li>
            </ul>
          </div>
          <div class="row" style="margin-top: 30px">
                <div class="col-sm-8 col-xs-1">
                </div>
                <div class="col-sm-4 col-xs-10">
                  <a href="/admin/users" class="btn btn-lg btn-danger"><i class="fa fa-check"> </i> Volver a listado</a>
                </div>
              </div>
      @else
      <div class="alert alert-danger" role="alert">
          <p>Por favor corrige los errores</p>
          <ul>
            <li>{{ $errors }}</li>
          </ul>
        </div>
        <div class="row" style="margin-top: 30px">
              <div class="col-sm-8 col-xs-1">
              </div>
              <div class="col-sm-4 col-xs-10">
                <a href="{{ route('confirmar-pago', $user) }}" class="btn btn-lg btn-danger"><i class="fa fa-check"> </i> Corregir</a>
              </div>
            </div>

  @endif

@stop