<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestamoT extends Model 
{


    protected $table = 'prestamo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','cicla_id', 'estacion_id','user_id','created_at','updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
