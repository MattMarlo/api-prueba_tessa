<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flor extends Model
{
    protected $table= 'VariedadFlor';
    public $timestamps = false;
    protected $fillable =[
        'id',
        'nombre',
        'color',
        'precio_tallo',
    ];
}
