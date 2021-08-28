<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSocio;
use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function index(){
        $socios = Socio::paginate();
        // return $socios;
        return view('socios.index', compact('socios'));
    }

    public function menu(){
        return view('socios.menu');
    }

    public function create(){
        return view('socios.create');
    }

    public function store(StoreSocio $request){
        $socio = Socio::create($request -> all());

        return redirect(route('socios-show', $socio->id));
    }

    public function show(Socio $socio){
        return view('socios.show', compact('socio'));
    }

    public function edit(Socio $socio){
        return view('socios.edit', compact('socio'));
    }
}
