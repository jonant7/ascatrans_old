<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConductor;
use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index(){
        $conductores = Conductor::paginate();
        // return $conductores;
        return view('conductores.index', compact('conductores'));
    }

    public function menu(){
        return view('conductores.menu');
    }

    public function create(){
        return view('conductores.create');
    }

    public function store(StoreConductor $request){
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $name = time().'.'.$file->guessExtension();
            $path = public_path('img/'.$name);
        }
        copy($file, $path);

        $conductor = new Conductor();
        $conductor->name = $request->name.' '.$request->lastname;
        $conductor->email = $request->email;
        $conductor->identification = $request->identification;
        $conductor->licence = $path;
        $conductor->password = '123456';
        $conductor->state = 'active';


        $conductor->save();
        // $conductor = Conductor::create($request -> all());

        return redirect(route('conductores-show', $conductor->id));
    }

    public function show(Conductor $conductor){
        return view('conductores.show', compact('conductor'));
    }

    public function edit(Conductor $conductor){
        return view('conductores.edit', compact('conductor'));
    }

    public function update(Request $request, Conductor $conductor){
        $path = public_path('img/');
        $conductor->name = $request->name.' '.$request->lastname;
        $conductor->email = $request->email;
        $conductor->cedula = $request->identification;
        $conductor->licence = $path.'avatar.png';
        $conductor->password = '123456';
        $conductor->state = 'active';


        $conductor->save();

        return redirect(route('conductores-show', $conductor->id));
    }
}
