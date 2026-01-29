@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

    @guest
        {{-- HERO para usuarios NO autenticados --}}
        <section class="bg-white rounded-lg shadow p-8 text-center">
            <h2 class="text-3xl font-bold mb-3">Bienvenido a CampusHub</h2>
            <p class="text-gray-600 mb-6">
                Accede para gestionar proyectos del instituto y el listado de alumnos.
            </p>

            <div class="flex justify-center gap-4">
                <a href="{{ route('login') }}"
                   class="px-4 py-2 bg-blue-600 text-white rounded hover:opacity-90">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="px-4 py-2 bg-gray-800 text-white rounded hover:opacity-90">
                    Register
                </a>
            </div>
        </section>
    @else
        {{-- VISTA para usuarios autenticados --}}
        <section class="mb-6">
            <h2 class="text-2xl font-bold">Hola, {{ Auth::user()->name }}</h2>
            <p class="text-gray-600">
                Elige una opción para empezar.
            </p>
        </section>

        {{-- CARDS (obligatorio) --}}
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <article class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-2">Proyectos</h3>
                <p class="text-gray-600 mb-4">
                    Consulta los proyectos del centro (cargados con seeders).
                </p>
                <a href="{{ route('projects.index') }}"
                   class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:opacity-90">
                    Ver proyectos
                </a>
            </article>

            <article class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-2">Alumnos</h3>
                <p class="text-gray-600 mb-4">
                    Gestiona el CRUD de alumnos con paginación y confirmaciones.
                </p>
                <a href="{{ route('students.index') }}"
                   class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:opacity-90">
                    Gestionar alumnos
                </a>
            </article>
        </section>
    @endguest

@endsection