@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')

<div class="flex justify-center items-center h-screen bg-gray-900">
    <div class="bg-gray-800 rounded-lg shadow-xl p-5 w-96">
        <h1 class="text-3xl font-bold text-white mb-8">Regístrate</h1>

        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-white font-bold mb-2">Nombre</label>
                <input 
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Tu nombre"
                    class="border border-gray-600 bg-gray-700 text-white rounded-lg py-2 px-4 w-full @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}"
                />
                @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="username" class="block text-white font-bold mb-2">Username</label>
                <input 
                    id="username"
                    name="username"
                    type="text"
                    placeholder="Tu nombre de usuario"
                    class="border border-gray-600 bg-gray-700 text-white rounded-lg py-2 px-4 w-full @error('username') border-red-500 @enderror"
                    value="{{ old('username') }}"
                />
                @error('username')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block text-white font-bold mb-2">Email</label>
                <input 
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Tu email de registro"
                    class="border border-gray-600 bg-gray-700 text-white rounded-lg py-2 px-4 w-full @error('email') } @enderror"
                    value="{{ old('email') }}"
                />
                @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-white font-bold mb-2">Password</label>
                <input 
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Contraseña de registro"
                    class="border border-gray-600 bg-gray-700 text-white rounded-lg py-2 px-4 w-full"
                />
                @error('password')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-white font-bold mb-2">Repetir Password</label>
                <input 
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite tu contraseña"
                    class="border border-gray-600 bg-gray-700 text-white rounded-lg py-2 px-4 w-full"
                />
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg w-full">
                Crear cuenta
            </button>
        </form>
    </div>
</div>

@endsection
