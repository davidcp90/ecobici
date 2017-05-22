@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('title')
    Usuarios Registrados
@stop
@extends('admin_base.base_layout')
@section('content')
<h3><i class="fa fa-users"></i> Usuarios Registrados  <small> - Hay {{ $users->total() }} usuarios registrados.</small></h3>
<div class="row">
  <div class="col-xs-12">
    <a class="btn btn-success" href="{{ route('admin.users.create') }}" role="button" id="crear-usuario"> <i class="fa fa-plus-circle"> </i> Crear Nuevo Usuario </a>
  </div>
</div>
<div class="row mt">
  <div class="col-md-12">
          <nav>
  <ul class="pager">
  <?php if( $users->previousPageUrl()){ ?>
    <li class="previous"><a href="{{ $users->previousPageUrl() }}"><- Registros Anteriores</a></li>
    <?php } ?> 
    <?php if( $users->nextPageUrl()){ ?>
    <li class="next"><a href="{{ $users->nextPageUrl() }}">Siguientes Registros -> </a></li>
    <?php } ?> 
  </ul>
</nav>
    <div class="content-panel">
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th><i class="fa fa-credit-card"></i> Ecobici ID</th>
            <th><i class="fa fa-user"></i> Nombre</th>
            <th class="hidden-phone"><i class="fa fa-envelope"></i> Correo Electronico</th>
            <th><i class="fa fa-bookmark"></i> Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
          <tr>
            <td><a href="/usuario/id">{{ $user->id }}</a></td>
            <td >{{ $user->name }}</td>
            <td class="hidden-phone">{{ $user->email }}</td>
            <td><span class="label label-info label-mini">{{ $user->status }}</span></td>
            <td>
              <a class="btn btn-success btn-xs" href="{{ route('admin.users.edit', $user) }}" id="editar-{{ $user->id }}" title="Editar Datos Basicos"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-primary btn-xs" href="{{ route('editar-billing', $user) }}" id="editarbill-{{ $user->id }}" title="Editar Datos Facturación"><i class="fa fa-credit-card"></i></a>
              {!! Form::open(array('url' => 'admin/users/' . $user->id,'style'=>'display: inline-block;')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                                 <button type="submit" id="eliminar-{{ $user->id }}" class="btn btn-danger btn-xs" title="Eliminar usuario"><i class="fa fa-trash-o "></i></button>
                {!! Form::close() !!}
 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div><!-- /content-panel -->
          <nav>
  <ul class="pager">
  <?php if( $users->previousPageUrl()){ ?>
    <li class="previous"><a href="{{ $users->previousPageUrl() }}"><- Registros Anteriores</a></li>
    <?php } ?> 
    <?php if( $users->nextPageUrl()){ ?>
    <li class="next"><a href="{{ $users->nextPageUrl() }}">Siguientes Registros -> </a></li>
    <?php } ?> 
  </ul>
</nav>
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@stop