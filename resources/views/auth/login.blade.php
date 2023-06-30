@extends('layouts.app')

@section('titulo')
Sistema administrativo
@endsection

@section('contenido')

<div class="flex justify-center items-center h-screen bg-gray-900">
    <div class="bg-gray-800 rounded-lg shadow-xl p-10">
        <h1 class="text-3xl font-bold text-white mb-8">Inicia sesión </h1>

        <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf

            <div class="mb-6">
                <label for="email" class="block text-white font-bold mb-2">Email</label>
                <input 
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Tu email de registro"
                    class="border border-gray-600 bg-gray-700 text-white rounded-lg py-2 px-4 w-full @error('email') border-red-500 @enderror"
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

            <div class="flex items-center justify-between mb-6">
                <label for="remember" class="flex items-center text-white">
                    <input 
                        id="remember"
                        type="checkbox"
                        class="mr-2"
                    />
                    <span class="text-sm">Recuérdame</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:text-blue-600">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg w-full">
                Iniciar sesión
            </button>
        </form>
    </div>
</div>

@endsection
