<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = [
        'nombre'
        ,'marca'
        ,'lote'
        ,'descripccion'
        ,'id_categoria'
        ,'codigo'
        ,'existencias'
        ,'precio'
        ,'precion_comercial'
        ,'fecha_de_caducidad'
    ];
}
