<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use Illuminate\Http\Request;

class PasajeroController extends Controller
{
    public function index(){
        $pasajeros = Pasajero::paginate();
        // return $pasajeros;
        return view('pasajeros.index', compact('pasajeros'));
    }

    public function menu(){
        return view('pasajeros.menu');
    }

    public function create(){
        return view('pasajeros.create');
    }

    public function store(Request $request){
        $pasajero = Pasajero::create($request -> all());

        return redirect(route('pasajeros-show', $pasajero->id));
    }

    public function show(Pasajero $pasajero){
        return view('pasajeros.show', compact('pasajero'));
    }

    public function edit(Pasajero $pasajero){
        return view('pasajeros.edit', compact('pasajero'));
    }
}
