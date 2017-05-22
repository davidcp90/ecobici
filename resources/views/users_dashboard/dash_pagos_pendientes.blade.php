@extends('admin_base.base_layout')
@section('sidebar')
  @include('admin_base.sidebar_user')
@stop
@section('content')
<h3><i class="fa fa-wrench"></i> Herramientas de Pagos </h3>
<div class="row mt">
    <div class="col-lg-12 text-center">
        <h3>Facturas Pendientes</h3>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 mb">
        <table class="table table-striped table-advance table-hover ">
            <thead>
                <tr>
                    <th><i class="fa fa-list-alt"></i> ID Pago</th>
                    <th><i class="fa fa-dollar"></i> Monto Pagado</th>
                    <th><i class="fa fa-check-square-o"></i> Estado del Pago</th>
                </tr>
            </thead>
            <tbody>
            <?php $total=0; ?>
              @foreach ($pagospendientes as $payment_history)
                <?php 
                if($payment_history->user_id == Auth::user()->id && $payment_history->confirmacion_pago== 1){
                ?>
                <tr>
                    <td> {{ $payment_history->id }} </td>
                    <td> {{ $payment_history->monto }}</td>
                    <td>  <?php if($payment_history->confirmacion_pago== 1) { ?> Pendiente <?php $total= $total+$payment_history->monto; }?></td>
                </tr>
                <?php } ?>
               @endforeach
            </tbody>
        </table>
        <div>
            <h3>Deuda Total: 
                        <span>  <?php echo $total ?></span>
            </h3>
            <input type="button" class="btn btn-theme03" value="Pagos Online">
            <input type="button" class="btn btn-theme03" value="Imprimir Factura">
        </div>    
    </div><!-- /col-md-4-->
</div>
@stop