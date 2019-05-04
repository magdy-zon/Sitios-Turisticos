<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitioVacacional extends Model
{
    //
    protected $table = 'sitios_vacacionales';
    protected $fillable = [
      'nombre',
      'descripcion',
      'lat',
      'long',
      'direccion'
    ];

    
}
