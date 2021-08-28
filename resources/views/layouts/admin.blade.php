<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="grid grid-cols-12 h-screen">
        <div class="col-span-2 h-full bg-gray-800 text-white">
            @include('layouts.menu')
        </div>
        <div class="col-span-10 ">
            <main class="h-full">
                <div class="grid grid-cols-6 divide-x divide-gray-500 shadow-md bg-white p-3 m-3 rounded-full items-center">
                    <div class="col-span-5 ">
                        <strong>@yield('title')</strong>
                        <a href="@yield('link')">Volver</a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-arrow-left"></i>
                        <i class="fas fa-bell"></i>
                        <div class="w-8 h-8 bg-blue-600 rounded-full">
                        </div>
                    </div>
                </div>
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
