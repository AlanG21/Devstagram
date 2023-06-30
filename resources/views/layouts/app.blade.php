<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema - @yield('titulo')</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-color: #1a202c;
        }
        .header {
            background-color: #1a202c;
            color: #250859;
        }
        .nav-link {
            font-weight: bold;
            text-transform: uppercase;
            color: #210442;
        }
        .container {
            background-color: #09967a;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            color: #1a202c;
        }
        .footer {
            background-color: #1a202c;
            color: #fff;
        }
    </style>
</head>
<body>
    <header class="header p-5 border-b bg-gray-900 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Sistema
            </h1>
            <nav class="flex gap-2 items-center">
                <a href="{{ route('login') }}" class="font-bold uppercase nav-link" href="#">Login</a>
                <a href="{{ route('register') }}" class="font-bold uppercase nav-link">Crear Cuenta</a>
            </nav>
        </div>
    </header>
    
    <main class="container mx-auto mt-10">
        <h2 class="title font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

</body>
</html>
