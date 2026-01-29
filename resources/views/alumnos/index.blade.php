<x-layouts.layout>

    <div class="flex justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Alumnos</h2>
        <a href="{{ route('alumnos.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
            Nuevo alumno
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full bg-white shadow rounded text-gray-800">
        <thead class="bg-gray-200 text-gray-800">
        <tr>
            <th class="p-2 text-left">Nombre</th>
            <th class="p-2 text-left">Email</th>
            <th class="p-2 text-left">Edad</th>
            <th class="p-2 text-center">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($alumnos as $alumno)
            <tr class="border-t text-gray-800">
                <td class="p-2">{{ $alumno->nombre }}</td>
                <td class="p-2">{{ $alumno->email }}</td>
                <td class="p-2">{{ $alumno->edad }}</td>
                <td class="p-2 text-center">
                    <form method="POST"
                          action="{{ route('alumnos.destroy', $alumno) }}"
                          onsubmit="return confirm('¿Eliminar alumno?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="p-4 text-center text-gray-600">
                    No hay alumnos registrados
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>

</x-layouts.layout>
