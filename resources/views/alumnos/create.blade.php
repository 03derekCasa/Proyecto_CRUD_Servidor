<x-layouts.layout>

    <h2 class="text-2xl font-bold mb-6 text-gray-800">Nuevo alumno</h2>

    <form method="POST"
          action="{{ route('alumnos.store') }}"
          class="bg-white p-6 shadow rounded w-full max-w-md text-gray-800">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Nombre</label>
            <input type="text"
                   name="nombre"
                   class="w-full border border-gray-300 p-2 rounded text-gray-800"
                   required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Email</label>
            <input type="email"
                   name="email"
                   class="w-full border border-gray-300 p-2 rounded text-gray-800"
                   required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Edad</label>
            <input type="number"
                   name="edad"
                   class="w-full border border-gray-300 p-2 rounded text-gray-800"
                   required>
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Guardar
        </button>
    </form>

</x-layouts.layout>
