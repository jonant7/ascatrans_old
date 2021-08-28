<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadController extends Controller
{
    public function index(){
        return view('unidades.index');
    }

    public function create(){
        return view('unidades.create');
    }

    public function show($unidad){
        return view('unidades.show', ['unidad' => $unidad]);
    }
}
