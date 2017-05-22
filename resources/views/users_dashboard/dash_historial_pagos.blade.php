@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-wrench"></i> Herramientas de Pagos </h3>
<div class="row mt">
    <div class="col-lg-12 text-center">
        <h3>Historial de Pagos</h3>
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
        </form -->
        <div style="margin-top:20px;"></div>
        <table class="table table-striped table-advance table-hover ">
            <thead>
                <tr>
                    <th><i class="fa fa-list-alt"></i> ID Pago</th>
                    <th><i class="fa fa-calendar"></i> Fecha del Pago</th>
                    <th><i class="fa fa-dollar"></i> Monto Pagado</th-->
                    <th><i class="fa fa-credit-card"></i> Medio de Pago</th>
                    <!--th><i class="fa fa-check-square-o"></i> Estado del Pago</th>-->
                    <th><i class="fa fa-check-square-o"></i> Confirmacion del Pago</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histopagos as $payment_history)
                <?php if($payment_history->user_id == Auth::user()->id ){?>
                <tr>
                    <td> {{ $payment_history->id }} </td>
                    <td> {{ $payment_history->created_at->year}}-{{ $payment_history->created_at->month}}-{{ $payment_history->created_at->day}}</td>
                    <td> {{ $payment_history->monto }}</td>
                    <td> {{ $payment_history->medio }}</td-->
                    <?php if($payment_history->confirmacion_pago== 1) { ?><td> Pendiente </td><?php }; ?>
                    <?php if($payment_history->confirmacion_pago== 0) { ?><td> Aprobado </td><?php }; ?>
                </tr>
                <?php } ?>
               @endforeach
            </tbody>
        </table>
    </div><!-- /col-md-4-->
</div>
@stop