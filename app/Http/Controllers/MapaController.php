<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapaController extends Controller
{
    public function __invoke(){
        return view('mapa.index');
    }
}
