<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoPagos extends Model
{
    protected $table = 'historico_pagos';

    protected $fillable = ['id','user_id', 'confirmacion_pago','monto','medio_pago'];

    protected $hidden = ['created_at', 'updated_at']; 

}
