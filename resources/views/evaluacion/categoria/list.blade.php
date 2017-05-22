@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('content')
<h3><i class="fa fa-list-ul"></i> Categorias para evaluaci&oacute;n</h3>
<div class="row">
  <div class="col-md-12">
    <a href="/admin/categorias/create">
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
            <th> Categoria ID</th>
            <th>Nombre</th>
            <th>Operaciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($categorias as $categoria)
          <tr>
            <td>{{ $categoria->id }}</td>
            <td >{{ $categoria->nombre }}</td>
            <td>
              <a class="btn btn-success btn-xs" href="{{ route('admin.categorias.edit', $categoria) }}" ><i class="fa fa-pencil"></i></a>
              {!! Form::open(array('url' => 'admin/categorias/' . $categoria->id,'style'=>'display: inline-block;')) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                <button type="submit" class="btn btn-danger btn-xs delete-{{$categoria->id}}" title="Eliminar"><i class="fa fa-trash-o "></i></button>
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