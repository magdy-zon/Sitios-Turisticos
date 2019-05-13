<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class APIController extends Controller
{
    //
    public function allStates() {
        $states = Estado::all();
        // return $states;

        $return = array();
        foreach ($states as $state) {
            $data = array();
            $data['estado'] = $state->nombre_id;
            $data['id']   = $state->estado_id;
            $data['nombre'] = $state->nombre;
            $data['capital'] = $state->capital;
            $return[] = $data;
        }
        return $return;
    }
}
