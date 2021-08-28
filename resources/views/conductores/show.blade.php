@extends('layouts.admin')

@section('title', 'Conductores')
@section('link')
{{route('conductores')}}
@endsection
@section('content')
<div class="bg-white shadow-lg rounded-lg md:w-2/6 h-3/5 p-5 m-3 mx-auto  grid grid-cols-1 ">
    <h3 class="text-2xl text-center font-bold  place-content-between">Conductor</h3>
    <div class="content-center space-y-4">
        <div class="w-28 h-28 border border-green-700 bg-green-400 rounded-full mx-auto">
            <img class="w-full" src="{{asset('img/avatar.png')}}" alt="">
        </div>
        <div>
            <span>Nombre: </span>
            <br>
            <span>{{$conductor -> name}}</span>
        </div>
        <div>
            <span>Correo: </span>
            <br>
            <span>{{$conductor -> email}}</span>
        </div>
        <div>
            <span>Cédula: </span>
            <br>
            <span>{{$conductor -> cedula}}</span>
        </div>
        <div>
            <span>Licencia: </span>
            <br>
            <span>{{$conductor -> licencia}}</span>
        </div>
    </div>
    <div class="text-center space-x-5">
        <a class="bg-yellow-400 text-white rounded-md w-40 p-2 px-10" href="{{route('conductores-edit', $conductor->id)}}">Editar</a>
        <a class="bg-red-600 text-white rounded-md w-40 p-2 px-10" href="">Eliminar</a>
    </div>
</div>
@endsection()
