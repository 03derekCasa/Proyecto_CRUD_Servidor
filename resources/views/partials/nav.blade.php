<nav class="bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-14 items-center">
            <div class="flex gap-6 items-center">
                <span class="font-bold text-lg">Proyecto CRUD Laravel</span>

                <a href="{{ url('/') }}" class="hover:underline">Inicio</a>
                <a href="{{ route('projects.index') }}" class="hover:underline">Proyectos</a>
                <a href="{{ route('alumnos.index') }}" class="hover:underline">Alumnos</a>
            </div>

            <div class="flex items-center gap-4">
                <span>{{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-200 hover:text-red-400">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
