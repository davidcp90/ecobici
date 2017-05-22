@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('content')
<h3><i class="fa fa-file-text"></i> Cuestionarios</h3>
<div class="row">
  <div class="col-md-12">
    <a href="/admin/cuestionarios/create">
    <button type="button" class="btn btn-outline btn-success">Crear</button>
    </a>
  </div>
</div>
<div class="row mt">
  <div class="col-md-12">
    <div class="content-panel">
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th> Cuestionario ID</th>
            <th>Nombre</th>
            <th>Puntaje</th>
            <th>Operaciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($cuestionarios as $cuestionario)
          <tr>
            <td>{{ $cuestionario->id }}</td>
            <td >{{ $cuestionario->nombre }}</td>
            <td >{{ $cuestionario->puntaje }}</td>
            <td>
              <a class="btn btn-success btn-xs" href="/admin/cuestionarios/{{ $cuestionario->id }}/edit" ><i class="fa fa-pencil"></i></a>
              {!! Form::open(array('url' => 'admin/cuestionarios/' . $cuestionario->id,'style'=>'display: inline-block;')) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                <button type="submit" class="btn btn-danger btn-xs" title="Eliminar"><i class="fa fa-trash-o "></i></button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div><!-- /content-panel -->
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@stop