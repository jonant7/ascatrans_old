@extends('layouts.admin')

@section('title', 'Pasajeros')
@section('content')
<div class="bg-white shadow-lg rounded-lg h-5/6 p-5 m-5">
    <div class="flex justify-between pb-4">
        <select class="rounded-lg p-1.5 w-1/6" name="select">
            <option value="value1" selected>Escolares</option>
            <option value="value2">Institucionales</option>
          </select>
        <a class="p-1 px-3 border border-blue-800 text-blue-800 hover:bg-blue-800 hover:text-white rounded-full" href="{{route('pasajeros-create')}}"><i class="fas fa-plus-circle"></i> Agregar pasajero</a>
    </div>
    <table class="table w-full text-center">
        <thead>
            <tr>
                <th class="text-gray-400 font-medium">#</th>
                <th class="text-gray-400 font-medium">Nombre</th>
                <th class="text-gray-400 font-medium">Correo</th>
                <th class="text-gray-400 font-medium">Cédula</th>
                <th class="text-gray-400 font-medium">Licencia</th>
                <th class="text-gray-400 font-medium">Estado</th>
                <th class="text-gray-400 font-medium">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasajeros as $pasajero)
                <tr class="border-gray-200 border-b-2 hover:bg-gray-200 h-10">
                    <th scope="row">{{$pasajero->id}}</th>
                    <td><a class="text-blue-800 hover:text-blue-600" href="{{route ('pasajeros-show', $pasajero->id)}}">{{$pasajero->name}}</a></td>
                    <td class="text-gray-900">{{$pasajero->email}}</td>
                    <td class="text-gray-900">{{$pasajero->cedula}}</td>
                    <td class="text-gray-900">{{$pasajero->state}}</td>
                    <td><i class="fas fa-ellipsis-v text-gray-400"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
        {{$pasajeros -> links()}}
    </div>
</div>
@endsection()
