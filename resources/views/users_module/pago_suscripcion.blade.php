@section('title')
    Pago Suscripción
@stop
@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@extends('admin_base.base_layout')
@section('content')
<h3 class="no-print"><i class="fa fa-users"></i> Registro de usuarios - Paso 2: Pago de Suscripción</h3>
<div class="row mt">
  <div class="col-lg-12">
    <div class="col-sm-6 col-xs-10 col-sm-offset-3 col-xs-offset-1 mb">
      <!-- WHITE PANEL - TOP USER -->
      <div class="content-panel pn" style="padding-top: 0; height: auto !important">
        <div class="profile-01 centered" >
          <p>Recibo de pago</p>
        </div>
        <p class="centered"><img src="/assets/img/logo_black.png"  style="opacity: 0.5"></p>
        <p class="text-center"><b>Ecobici S.A.S Colombia</b></p>
        <p class="text-center"><b>NIT # 6876876465454-9</b></p>
        <div class="row mt gp">
          <div class="col-xs-12"><h4 class="text-primary" style="margin: 0 0 20px 0"><strong>Información de Cliente</strong></h4></div>
          <div class="col-xs-4">
            <p><strong>Nombre y Apellidos</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{ $user->name }}</p>
          </div>
          <div class="col-xs-4">
            <p><strong>Cedula</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{ $user->cedula }}</p>
          </div>
          <div class="col-xs-4">
            <p><strong>Telefono</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{ $user->telefono_fijo }}</p>
          </div>
          <div class="col-xs-4">
            <p><strong>Celular</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{ $user->celular }}</p>
          </div>
          <div class="col-xs-12"><h4 class="text-primary" style="margin: 0 0 20px 0"><strong>Información de Suscripción</strong></h4></div>
          <div class="col-xs-4">
            <p><strong>Valor Pagado</strong></p>
          </div>
          <div class="col-xs-8">
            <p>$5000</p>
          </div>
          <div class="col-xs-4">
            <p><strong>Modalidad Validación</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{$user->usuario_aprobado}}</p>
          </div>
          <div class="clearfix"></div>
          <br/>
          <div class="col-xs-4">
            <p><strong>Usuario</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{ $user->email }}</p>
          </div>
          <div class="col-xs-4">
            <p><strong>Contraseña</strong></p>
          </div>
          <div class="col-xs-8">
            <p>{{ $password }}</p>
          </div>
          <div class="col-xs-12"><small>* No pierdas este recibo, es estrictamente necesario para presentar su prueba de habilidad y poder hacer uso de nuestros servicios.Para validar sus aptitudes y usar el servicio utilice el usuario y contraseña de este recibo é ingrese a www.ecobicibogota.me</small></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-xs-12 centered mt no-print">
        <a href="javascript:window.print()" class="btn btn-lg btn-primary"><i class="fa fa-print"> </i> Confirmar Pago é imprimir Recibo</a>
      </div>
    </div><!-- /col-md-4 -->
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop