@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-file-text"></i> Cuestionarios</h3>
<div class="row mt">
  <div class="col-md-12">
    <h4>Bienvenido al modulo de evaluaci&oacute;n para ecoboici</h4>
    <p class="lead"> 
    Estos cuestionarios evaluarán las habilidades ciclísticas necesarias para el uso de la bicicleta como estrategia alterna de transporte en el casco urbano. 
    <br/>
    Seleccione el cuestionario que desea realizar.
    </p>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Cuestionarios</th>
            <th># Preguntas</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($cuestionarios as $cuestionario)
          <tr>
            <td ><a href="/evaluacion/cuestionario/{{$cuestionario->id}}/create">{{ $cuestionario->nombre }}</a></td>
            <td class="text-center">
            {{$cuestionario->preguntas->count()}}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div><!-- /content-panel -->
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@stop