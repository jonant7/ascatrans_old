@extends('layouts.admin')

@section('title', 'Conductores')
@section('content')
<div class="bg-white shadow-lg rounded-lg h-5/6 p-5 m-5">
    <div class="flex justify-end pb-4">
        <a class="p-1 px-3 border border-blue-800 text-blue-800 hover:bg-blue-800 hover:text-white rounded-full" href="{{route('conductores-create')}}"><i class="fas fa-plus-circle"></i> Agregar conductor</a>
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
            @foreach ($conductores as $conductor)
                <tr class="border-gray-200 border-b-2 hover:bg-gray-200 h-10">
                    <th scope="row">{{$conductor->id}}</th>
                    <td><a class="text-blue-800 hover:text-blue-600" href="{{route ('conductores-show', $conductor->id)}}">{{$conductor->name}}</a></td>
                    <td class="text-gray-900">{{$conductor->email}}</td>
                    <td class="text-gray-900">{{$conductor->identification}}</td>
                    <td><a class="text-blue-800 hover:text-blue-600" href="{{$conductor->licence}}">Ver licencia</a></td>
                    <td class="text-gray-900"><div class="{{$conductor->state}}">{{$conductor->state}}</div></td>
                    <td><i class="fas fa-ellipsis-v text-gray-400"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
        {{$conductores -> links()}}
    </div>
</div>
@endsection()
