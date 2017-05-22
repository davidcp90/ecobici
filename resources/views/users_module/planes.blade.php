@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-gift"></i> Planes de Suscripción</h3>
<div class="row mt">
  <div class="col-lg-12">
    <p>Seleccione el plan que el usuario quiere utilizar</p>
  </div>
  <div class="col-md-4 col-sm-4 mb" style="cursor:pointer">
    <div class="grey-panel pn donut-chart">
      <div class="grey-header">
        <h5><strong>PLAN TEMPORAL</strong></h5>
      </div>
      <h2><i class="text-info fa fa-clock-o fa-2x"> </i><br/>$7000</h2>
      <p>Beneficio brindado por EcoBici para este plan de suscripción, es importane mostrarle al usuario las opciones que tiene</p>
    </div><! --/grey-panel -->
  </div><!-- /col-md-4-->
  <div class="col-md-4 col-sm-4 mb" style="cursor:pointer">
    <div class="grey-panel pn donut-chart">
      <div class="grey-header">
        <h5><strong>PLAN ANUAL</strong></h5>
      </div>
      <h2><i class="fa text-success fa-star fa-2x"> </i><br/>$7000</h2>
      <p>Beneficio brindado por EcoBici para este plan de suscripción, es importane mostrarle al usuario las opciones que tiene</p>
    </div><! --/grey-panel -->
  </div><!-- /col-md-4-->
  <div class="col-md-4 col-sm-4 mb"  style="cursor:pointer">
    <div class="grey-panel pn donut-chart">
      <div class="grey-header">
        <h5><strong>PLAN MENSUAL</strong></h5>
      </div>
      <h2><i class="fa text-warning fa-calendar fa-2x"> </i><br/>$7000</h2>
      <p>Beneficio brindado por EcoBici para este plan de suscripción, es importane mostrarle al usuario las opciones que tiene</p>
    </div><! --/grey-panel -->
  </div><!-- /col-md-4-->
</div><!-- /END CHART - 4TH ROW OF PANELS -->
</div>
@stop