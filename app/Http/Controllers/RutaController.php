<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index(){
        return view('rutas.index');
    }

    public function create(){
        return view('rutas.create');
    }

    public function show($ruta){
        return view('rutas.show', ['ruta' => $ruta]);
    }
}
