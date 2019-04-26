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
      'capital',
    ];
}
