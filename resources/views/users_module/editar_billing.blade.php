@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-user"></i> Editar Datos de Facturación : {{ $user->id }} - {{ $user->name }} - <span class="label label-warning">{{ $user->usuario_aprobado }}</span></h3>
{!! Form::open(['route' => 'store-billing', 'method' => 'POST']) !!}
<input type="hidden" name="user" value="{{ $user->id }}"/>
<div class="row mt">
  <div class="col-lg-12">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#billing" aria-controls="billing" role="tab" data-toggle="tab"><i class="fa fa-credit-card"> </i> Datos de Facturación</a></li>
     <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-meh-o"> </i> Datos Basicos</a></li>-->
    </ul>
    <!--content tabs-->
    <div class="tab-content">
      <!--billing tab-->
      <div role="tabpanel" class="tab-pane fade in active" style="background:white; border: 1px solid #DDD; padding: 15px;border-top: 0" id="billing">
        <div class="form-horizontal style-form">
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Medio de Pago *</label>
            <div class="col-sm-10 col-xs-12">
              <select class="form-control" name="payment_type">
                <option>Seleccione un metodo de pago</option>
                @foreach ($payment_types as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Referencia</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" name="reference" placeholder="Ingrese la referencia de pago" class="form-control">
            </div>
            <div class="clearfix"></div>
            <p class="col-sm-10 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-danger">RECUERDE: La referencia para VISA y MasterCard es el numero de tarjeta , y para facturas ETB o Codensa el numero de cliente.</p>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Plan</label>
            <div class="col-sm-10 col-xs-12">
              <select class="form-control" name="payment_period">
                <option>Seleccione un plan de uso</option>
                @foreach ($periods as $t)
                <option value="{{ $t->id }}">{{ $t->name }} {{ $t->days }} Dias</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--tab de datos pasicos-->
      <div role="tabpanel" class="tab-pane fade" style="background:white; border: 1px solid #DDD; padding: 15px;border-top: 0" id="profile">
        <div class="form-horizontal style-form">
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Nombre y Apellidos *</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" placeholder="Ingrese el Nombre y Apellido" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Cedula *</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" placeholder="Ingrese el No. de Cedula " class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Telefono Fijo</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" placeholder="Ingrese el Telefono fijo" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Celular</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" placeholder="Ingrese el No. Celular" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Dirección</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" placeholder="Ingrese la dirección " class="form-control">
            </div>
          </div>

        </div>
      </div>
    </div>
<div class="row" style="margin-top: 30px">
            <div class="col-sm-8 col-xs-1">
            </div>
            <div class="col-sm-4 col-xs-10">
              <button type="submit" class="btn btn-lg btn-primary" id="guardar"><i class="fa fa-save"> </i> Guardar</button>
              <a href="/admin/users" class="btn btn-lg btn-default"><i class="fa fa-times"> </i> Cancelar</a>
            </div>
          </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
{!! Form::close() !!}
@stop