@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<div class="container_capitulos descripcion">
	<h1 class="ecobici title_examen">{!! $pregunta->id !!}. {!! $pregunta->enunciado !!}</h1>

	@if( Session::has('mensaje') )
		<div role="alert" class="alert alert-danger alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <p>
            	{!! Session::get('mensaje') !!}
            </p>
        </div>   
	@endif

	{!! Form::open() !!}

		<div class="row examen">
			<div class="col-md-12">
				<table>
					@foreach( $pregunta->respuestas as $opcion )
						<tr>
							<td>
								{!! Form::radio('opcion', $opcion->id) !!}								
							</td> 
							<td>
								<label>{!! $opcion->respuesta !!}</label>
							</td>
						</tr>
					@endforeach()
				</table>

				<input type="submit" value="Evaluar" class="btn btn-primary">	
			</div>
		</div>

		
	{!! Form::close() !!}
</div>
@stop

	<style type="text/css">
		input[type=radio] { 
			margin-right: 10px; 
		}

		input[type=submit] { 
			margin-top: 10px;
		}
		.site-footer{
		 position: absolute;
   		 bottom: 0;
    	 width: 100%;
		}
	</style>