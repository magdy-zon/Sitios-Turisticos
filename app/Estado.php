<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table      = 'estados';
    protected $primaryKey = 'estado_id'; //Por defecto id
    protected $fillable   = [
      'nombre',
      'capital'
    ];

    public function sitiosvacacionales() {
        return $this->hasMany('App\SitioVacacional', 'estado_id', 'estado_id');
    }

}
