<x-layouts.layout>

    @guest
        <div class="text-center text-gray-800">
            <h2 class="text-3xl font-bold mb-4">Bienvenido a la aplicación</h2>
            <p class="mb-6">Inicia sesión o regístrate para continuar</p>
            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2">Login</a>
            <a href="{{ route('register') }}" class="bg-green-600 text-white px-4 py-2 rounded">Registro</a>
        </div>
    @endguest

    @auth
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Panel principal</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <a href="{{ route('projects.index') }}"
               class="block p-6 bg-white shadow rounded hover:bg-gray-100">
                <h3 class="text-xl font-bold text-gray-800">Proyectos</h3>
                <p class="text-gray-600">Gestión de proyectos</p>
            </a>

            <a href="{{ route('alumnos.index') }}"
               class="block p-6 bg-white shadow rounded hover:bg-gray-100">
                <h3 class="text-xl font-bold text-gray-800">Alumnos</h3>
                <p class="text-gray-600">Gestión de alumnos</p>
            </a>

        </div>
    @endauth

</x-layouts.layout>
