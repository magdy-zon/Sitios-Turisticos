<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuristaController extends Controller
{
    //
    public function index() {
        $name   = 'Steve Jobs Example';
        $name2  = 'Milan Kundera';

        return view('turistas', compact('name', 'name2'));
    }


}
