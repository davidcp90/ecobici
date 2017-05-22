@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-list-ul"></i> Categorias para evaluaci&oacute;n</h3>
      @if(!empty($message))
      <div class="alert alert-info">
          {{$message}}
      </div>
      @endif
<div class="row mt">
  <div class="col-md-12">
    <h4>Para aprobar el curso debe contestar satisfactoriamente todas las categoías que encuentra a continuacion.</h4>
  </div>
  <div class="col-md-12">
    <div class="content-panel">
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>Nombre de la Categoria</th>
            <th>Nº Preguntas</th>
            <th>Operaciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($categorias as $categoria)
          <tr>
            <td >{{ $categoria->nombre }}</td>
            <td >{{ $categoria->preguntas->count() }}</td>
            <td>
              <a href="/evaluacion/{{$evaluacion->id}}/categoria/{{$categoria->id}}/pregunta">Responder</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="row">
        <div class="col-sm-4 col-xs-1">
        </div>
        <div class="col-sm-4 col-xs-10">
          <a href="/evaluacion" >
            <button class="btn btn-warning"> Volver </button>
          </a>
        </div>
      </div>
    </div><!-- /content-panel -->
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@stop