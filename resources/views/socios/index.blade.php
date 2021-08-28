@extends('layouts.admin')

@section('title', 'Socios')
@section('content')
<div class="bg-white shadow-lg rounded-lg h-5/6 p-5 m-5">
    <div class="flex justify-end pb-4">
        <a class="p-1 px-3 border border-blue-800 text-blue-800 hover:bg-blue-800 hover:text-white rounded-full" href="{{route('socios-create')}}"><i class="fas fa-plus-circle"></i> Agregar socio</a>
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
            @foreach ($socios as $socio)
                <tr class="border-gray-200 border-b-2 hover:bg-gray-200 h-10">
                    <th scope="row">{{$socio->id}}</th>
                    <td><a class="text-blue-800 hover:text-blue-600" href="{{route ('socios-show', $socio->id)}}">{{$socio->name}}</a></td>
                    <td class="text-gray-900">{{$socio->email}}</td>
                    <td class="text-gray-900">{{$socio->cedula}}</td>
                    <td class="text-gray-900">{{$socio->licencia}}</td>
                    <td class="text-gray-900">{{$socio->state}}</td>
                    <td><i class="fas fa-ellipsis-v text-gray-400"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
        {{$socios -> links()}}
    </div>
</div>
@endsection()
