@extends('layouts.admin')

@section('title', 'Crear pasajero')
@section('content')
<div class="bg-white shadow-lg rounded-lg md:w-2/6 min-h-3/5 p-5 m-3 mx-auto  grid grid-cols-1 ">
    <h3 class="text-2xl text-center font-bold  place-content-between">Nuevo conductor</h3>
    <form class="space-y-4" action="{{ route('pasajeros-store') }}" method="POST">
        @csrf
        <div class="grid">
            <label for="name" class="form-label">Nombres</label>
            <input type="text" class="form-input rounded-md" id="name" placeholder="" name="name">
        </div>
        <div class="grid">
            <label for="lastname" class="form-label">Apellido</label>
            <input type="text" class="form-input rounded-md" id="lastname" placeholder="" name="lastname">
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
            <label for="ocupation" class="form-label">Ocupación</label>
            <input type="number" class="form-input rounded-md" id="ocupation" placeholder="" name="ocupation">
        </div>
        <div class="grid">
            <label for="course" class="form-label">Curso</label>
            <input type="number" class="form-input rounded-md" id="course" placeholder="" name="course">
        </div>
        <div class="grid">
            <label for="direction" class="form-label">Direción</label>
            <input type="number" class="form-input rounded-md" id="direction" placeholder="" name="direction">
        </div>
        <div class="grid">
            <label for="zip" class="form-label">Código postal</label>
            <input type="number" class="form-input rounded-md" id="zip" placeholder="" name="zip">
        </div>
        <div class="grid">
            <label for="turn" class="form-label">Turno</label>
            <input type="number" class="form-input rounded-md" id="turn" placeholder="" name="turn">
        </div>
        <div class="text-center">
            <button type="submit" class="bg-green-500 text-white rounded-md p-2 px-8">CREAR USUARIO</button>
        </div>
    </form>
</div>
@endsection()
