@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-file-text"></i> Evaluaci&oacute;n</h3>
<div class="row mt">
  <div class="col-md-12">
    <p class="lead"> 
    Para continuar con el proceso de registro en Ecobici es necesario que realice un proceso de evaluacion, para ello debera contestar un cuestionario.
    </p>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Evaluaciones</th>
            <th>Cuestionario</th>
            <th>Puntaje</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($evaluaciones as $key => $evaluacion)
          <tr>
            <td>Evaluacion {{$key+1}}</td>
            <td >
            @if ($evaluacion->estado == 0)
            <a href="/evaluacion/evaluacion/{{$evaluacion->id}}/categorias">
            @endif
            {{ $evaluacion->cuestionario->nombre }}
            @if ($evaluacion->estado == 0)
            </a>
            @endif
            </td>
            <td class="text-center">
            {{$evaluacion->puntaje}}
            </td>
            <td>
            @if ($evaluacion->estado == 0)
                Sin terminar
            @elseif ($evaluacion->estado == 1)
                <?php $estado = true; ?>
                Aprobado
            @elseif ($evaluacion->estado == 2)
                Reprobrado
            @endif
            </td>
          </tr>
        @endforeach
        </tbody>
      </table> 
      @if (!isset($estado))
      <div class="row">
        <div class="col-sm-4 col-xs-1">
        </div>
        <div class="col-sm-4 col-xs-10">
          <a href="/evaluacion/cuestionario" >
            <button class="btn btn-success"> </i>Iniciar nueva evaluación</button>
          </a>
        </div>
      </div>
      @endif
    </div><!-- /content-panel -->
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@stop