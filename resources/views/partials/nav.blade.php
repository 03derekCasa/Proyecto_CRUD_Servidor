<nav class="bg-gray-100 border-b">
    <div class="container mx-auto p-3">
        <ul class="flex gap-6 items-center">
            <li>
                <a href="{{ route('home') }}" class="font-semibold hover:underline">
                    Inicio
                </a>
            </li>

            @auth
                <li>
                    <a href="#" class="hover:underline">
                        Proyectos
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:underline">
                        Alumnos
                    </a>
                </li>

                <li class="ml-auto">
                    <span class="mr-4">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li class="ml-auto">
                    <a href="{{ route('login') }}" class="hover:underline">
                        Login
                    </a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="hover:underline">
                        Register
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
