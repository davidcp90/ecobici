@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-user"></i> Editar Datos de Usuario : 274 - Michael Scott - <span class="label label-warning">Suscrito</span></h3>
<div class="row mt">
  <div class="col-lg-12">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#billing" aria-controls="billing" role="tab" data-toggle="tab"><i class="fa fa-credit-card"> </i> Datos de Facturación</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-meh-o"> </i> Datos Basicos</a></li>
    </ul>
    <!--content tabs-->
    <div class="tab-content">
      <!--billing tab-->
      <div role="tabpanel" class="tab-pane fade in active" style="background:white; border: 1px solid #DDD; padding: 15px;border-top: 0" id="billing">
        <div class="form-horizontal style-form">
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Medio de Pago *</label>
            <div class="col-sm-10 col-xs-12">
              <select class="form-control">
                <option>Seleccione un metodo de pago</option>
                <option>VISA</option>
                <option>MasterCard</option>
                <option>Codensa</option>
                <option>ETB</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Referencia</label>
            <div class="col-sm-10 col-xs-12">
              <input type="text" placeholder="Ingrese la referencia de pago" class="form-control">
            </div>
            <div class="clearfix"></div>
            <p class="col-sm-10 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-danger">RECUERDE: La referencia para VISA y MasterCard es el numero de tarjeta , y para facturas ETB o Codensa el numero de cliente.</p>
          </div>
          <div class="row mt">
            <div class="col-lg-12">
              <h4 class="text-success">Planes Disponibles</h4>
            </div>
            <div class="col-md-4 col-sm-4 mb" >
              <div class="grey-panel pn donut-chart">
                <div class="grey-header">
                  <h5><strong>PLAN TEMPORAL</strong></h5>
                </div>
                <h2><i class="text-info fa fa-clock-o fa-2x"> </i><br/>$7000</h2>
                <p>Beneficio brindado por EcoBici para este plan de suscripción, es importane mostrarle al usuario las opciones que tiene</p>
              </div><! --/grey-panel -->
            </div><!-- /col-md-4-->
            <div class="col-md-4 col-sm-4 mb" >
              <div class="grey-panel pn donut-chart">
                <div class="grey-header">
                  <h5><strong>PLAN ANUAL</strong></h5>
                </div>
                <h2><i class="fa text-success fa-star fa-2x"> </i><br/>$7000</h2>
                <p>Beneficio brindado por EcoBici para este plan de suscripción, es importane mostrarle al usuario las opciones que tiene</p>
              </div><! --/grey-panel -->
            </div><!-- /col-md-4-->
            <div class="col-md-4 col-sm-4 mb"  >
              <div class="grey-panel pn donut-chart">
                <div class="grey-header">
                  <h5><strong>PLAN MENSUAL</strong></h5>
                </div>
                <h2><i class="fa text-warning fa-calendar fa-2x"> </i><br/>$7000</h2>
                <p>Beneficio brindado por EcoBici para este plan de suscripción, es importane mostrarle al usuario las opciones que tiene</p>
              </div><! --/grey-panel -->
            </div><!-- /col-md-4-->
          </div><!-- /END CHART - 4TH ROW OF PANELS -->
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label hidden-xs">Plan</label>
            <div class="col-sm-10 col-xs-12">
              <select class="form-control">
                <option>Seleccione un plan de uso</option>
                <option>Temporal</option>
                <option>Anual</option>
                <option>Mensual</option>
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
              <a href="#" class="btn btn-lg btn-primary"><i class="fa fa-save"> </i> Guardar</a>
              <a href="#" class="btn btn-lg btn-default"><i class="fa fa-times"> </i> Cancelar</a>
            </div>
          </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop