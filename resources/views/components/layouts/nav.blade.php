<nav class="bg-blue-500 text-white px-4 py-2 flex justify-between">
    <div class="space-x-4">
        <a href="{{ route('main') }}" class="hover:underline">Inicio</a>

        @auth
            <a href="{{ route('projects.index') }}" class="hover:underline">Proyectos</a>
            <a href="{{ route('alumnos.index') }}" class="hover:underline">Alumnos</a>
        @endauth
    </div>

    <div class="space-x-4">
        @guest
            <a href="{{ route('login') }}" class="hover:underline">Login</a>
            <a href="{{ route('register') }}" class="hover:underline">Registro</a>
        @endguest

        @auth
            <span>{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="underline">Logout</button>
            </form>
        @endauth
    </div>
</nav>
