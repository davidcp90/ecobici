@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-question"></i> Pregunta</h3>
<div class="row mt">
  <div class="col-md-12">
    <div class="form-panel">
    <div class="col-md-12">
    <p class="lead"> 
    {{$pregunta->enunciado}}
    </p>
    </div>
      <form action="/evaluacion/respuesta" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="idEvaluacion" value="{{$idEvaluacion}}">
        <input type="hidden" name="idCategoria" value="{{$idCategoria}}">
        <div class="form-group">
          @foreach ($pregunta->opciones->sortBy('id') as $opcion)
          <div class="radio">
              <label>
                  <input type="radio" name="opcion" value="{{ $opcion->id }}" >{{$opcion->valor}} - {{$opcion->opcion}}
              </label>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-10">
            <button type="submit" class="btn btn-lg btn-success">Continuar</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@stop