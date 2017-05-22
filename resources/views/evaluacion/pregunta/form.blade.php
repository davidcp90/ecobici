@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_admin')
@stop
@section('content')
<h3><i class="fa fa-question"></i> Registro de preguntas</h3>
<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h4 class="mb">Ingrese los datos del pregunta</h4>
      <form class="form-horizontal style-form" action="/admin/preguntas" method="post">
      {!! csrf_field() !!}
      @if (isset($pregunta))
          <input type="hidden" name="id" value="{{$pregunta->id}}"/>
      @endif
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Enunciado de la pregunta</label>
          <div class="col-sm-10 col-xs-12">
            <textarea type="textarea" name="enunciado" class="form-control">{{$pregunta->enunciado or ''}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Categor&iacute;a *</label>
          <div class="col-sm-10 col-xs-12">
            <select name="categoria_id" class="form-control">
              <option>-- Seleccione una categor&iacute;a --</option>
              @foreach ($categorias as $categoria)
               <option value="{{ $categoria->id }}" >{{ $categoria->nombre }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Curso *</label>
          <div class="col-sm-10 col-xs-12">
            <select name="cuestionario_id" class="form-control">
              <option>-- Seleccione un cuestionario --</option>
              @foreach ($cuestionarios as $cuestionario)
               <option value="{{ $cuestionario->id }}" >{{ $cuestionario->nombre }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      Opciones
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <table class="table table-striped table-options">
                                <thead>
                                    <tr>
                                        <th>Valor</th>
                                        <th>Opcion</th>
                                        <th>Es Correcta</th>
                                        <th>opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(!empty($pregunta))
                                  @foreach($pregunta->opciones->sortBy('id') as $opcion)
                                    <tr>
                                        <input name="opciones[{{$opcion->valor}}][valor]" class="form-control option-valor" type="hidden" value="{{$opcion->valor}}" />
                                        <input name="opciones[{{$opcion->valor}}][id]" class="form-control option-id" type="hidden" value="{{$opcion->id}}" />
                                        <td class="option-text">
                                        {{$opcion->valor}}
                                        </td>
                                        <td><input name="opciones[{{$opcion->valor}}][opcion]" class="form-control option-option" type="text" value="{{$opcion->opcion or ''}}" /></td>
                                        <td>
                                            <input name="opciones[es_correcta]" class="radio-inline option-correct" type="radio" value="{{$opcion->valor}}" {{ $opcion->es_correcta ? 'checked="checked"': ''}} />
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-warning btn-xs delete-option">Eliminar</button>
                                        </td>
                                    </tr>
                                  @endforeach
                                  @endif
                                </tbody>
                            </table>
                            <div class="col-sm-8 col-xs-1">
                              <button type="button" class="btn btn-success add-option">Agregar</button>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
          <div class="col-sm-8 col-xs-1">
          </div>
          <div class="col-sm-4 col-xs-10">
            <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
            <a href="/admin/preguntas" class="btn btn-lg btn-default"><i class="fa fa-times"> </i> Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@stop

@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('assets/js/evaluacion/evaluacion.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/evaluacion/custom.js') }}"></script>
@if (isset($pregunta))
  <script type="text/javascript">
  $('select[name="cuestionario_id"]').val({{$pregunta->cuestionario_id or ''}});
  $('select[name="categoria_id"]').val({{$pregunta->categoria_id or ''}});
  </script>
@endif
@stop