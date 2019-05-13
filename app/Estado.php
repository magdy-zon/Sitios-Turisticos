<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    public $timestamps = false;
    protected $table = 'estados';
    protected $fillable = [
      'nombre',
      'capital'
    ];

    public function sitiosvacacionales() {
        return $this->hasMany('App\SitioVacacional', 'estado_id', 'estado_id');
    }

}
