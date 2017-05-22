@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-wrench"></i> Herramientas de Viajes </h3>
<div class="row mt">
    <div class="col-lg-12 text-center">
        <h3>Historial de Recorridos</h3>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 mb">
        <!--h4>Filtra tu Historial</h4><br>
        <form class="row">    
            <div class="col-sm-6 col-lg-6">         
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker1">

                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input type="date" class="form-control" placeholder="Desde"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker1">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input type="date" class="form-control" placeholder="Hasta"/>

                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $("#datetimepicker1").datetimepicker();
                });
            </script>
            <div class="col-sm-12 col-lg-12">
            <input type="submit" value="Buscar" class="btn btn-theme03 pull-right">
            </div>
        </form-->
        <div style="margin-top:20px;"></div>
        <table class="table table-striped table-advance table-hover ">
            <thead>
                <tr>
                    <th><i class="fa fa-calendar"></i> Fecha</th>
                    <th><i class="fa fa-clock-o"></i> Hora Inicio</th>
                    <th><i class="fa fa-clock-o"></i> Hora Final</th>
                    <th><i class="fa fa-flag-o"></i> Lugar de Partida</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamos as $prestamo)
                <?php if($prestamo->user_id == Auth::user()->id ){?>
                <tr>

                    <td> {{ $prestamo->created_at->year}}-{{ $prestamo->created_at->month}}-{{ $prestamo->created_at->day}} </td>
                    <td> {{ $prestamo->created_at->hour }}:{{ $prestamo->created_at->minute }}:{{ $prestamo->created_at->second }}</td>
                    <td> {{ $prestamo->updated_at->hour }}:{{ $prestamo->updated_at->minute }}:{{ $prestamo->updated_at->second }}</td>  
                    @foreach ($estaciones as $estacion) 
                    <?php if($prestamo->estacion_id == $estacion->id){ ?> <td>{{$estacion->nombre}}</td> <?php } ?> 
                     @endforeach    
               </tr>
                <?php } ?>  
                @endforeach
            </tbody>
        </table>
    </div><!-- /col-md-4-->
</div>
@stop