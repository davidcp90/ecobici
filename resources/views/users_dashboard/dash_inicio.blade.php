            @extends('users_base.base_layout')
@section('content')
<h3><i class="fa fa-user"></i> Bienvenido {{Auth::user()->name }}</h3>
<div class="row mt">
  <div class="col-lg-12 text-center">
    <h3>Ultimo Recorrido</h3>
  </div>
  <div class="col-lg-8 col-md-10 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 mb">
    <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th><i class="fa fa-calendar"></i> Fecha</th>
            <th><i class="fa fa-clock-o"></i> Hora Inicio</th>
            <th><i class="fa fa-clock-o"></i> Hora Final</th>
          </tr>
        </thead>
        <tbody>
          
<!--foreach ($prestamo as $recorrido) $users = DB::table('users')->select('name', 'email')->get(); -->
          <tr>
            <td> {{ $prestamo->user_id }} </td>
            <td> $recorrido->hora_inicio }}</td>
            <td> $recorrido->hora_final }}</td>      
          </tr>
<!--endforeach-->
        </tbody>
    </table>
  </div><!-- /col-md-4-->
</div>
@stop