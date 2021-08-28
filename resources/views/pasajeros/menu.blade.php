@extends('layouts.admin')

@section('title', 'Menú pasajeros')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 px-4 text-center">
    <a href="{{ route('pasajeros') }}">
        <div class="shadow-xl rounded-lg text-xl bg-white hover:bg-gray-100 text-blue-800 py-10 md:py-20 px-4">
            Lista de pasajeros escolares
        </div>
    </a>
    <a href="{{ route('pasajeros') }}">
        <div class="shadow-xl rounded-lg text-xl bg-white hover:bg-gray-100 text-blue-800 py-10 md:py-20 px-4">
            Lista de pasajeros institucionales
        </div>
    </a>
    <a href="{{ route('pasajeros-create') }}">
        <div class="shadow-xl rounded-lg text-xl bg-white hover:bg-gray-100 text-blue-800 py-10 md:py-20 px-4">
            Agregar pasajero
        </div>
    </a>
</div>
@endsection()
