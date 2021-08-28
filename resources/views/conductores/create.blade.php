@extends('layouts.admin')

@section('title', 'Crear conductor')
@section('content')
    <div class="bg-white shadow-lg rounded-lg md:w-2/6 min-h-3/5 p-5 m-3 mx-auto  grid grid-cols-1 ">
        <h3 class="text-2xl text-center font-bold  place-content-between">Nuevo conductor</h3>
        <form class="space-y-4" action="{{ route('conductores-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-input rounded-md" id="name" placeholder="" name="name">
            </div>
            <div class="grid">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-input rounded-md" id="lastname" placeholder="" name="lastname">
            </div>
            <div class="grid">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-input rounded-md" id="email" placeholder="" name="email">
            </div>
            <div class="grid">
                <label for="cedula" class="form-label">Cédula</label>
                <input type="number" class="form-input rounded-md" id="cedula" placeholder="" name="identification">
            </div>
            <div class="grid">
                <label for="age" class="form-label">Edad</label>
                <input type="number" class="form-input rounded-md" id="age" placeholder="" name="age">
            </div>
            <div class="grid">
                ver
                <label for="formFile" class="form-label">Licencia</label>
                <input class="form-input rounded-md" type="file" id="formFile" name="licence">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-green-500 text-white rounded-md p-2 px-8">CREAR USUARIO</button>
            </div>
        </form>
    </div>
@endsection()
