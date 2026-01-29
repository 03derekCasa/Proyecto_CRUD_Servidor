<x-layouts.layout>

    <h2 class="text-2xl font-bold mb-6 text-gray-800">Nuevo proyecto</h2>

    <form method="POST"
          action="{{ route('projects.store') }}"
          class="bg-white p-6 shadow rounded w-full max-w-md text-gray-800">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Nombre</label>
            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   class="w-full border border-gray-300 p-2 rounded text-gray-800">
            @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Descripción</label>
            <textarea name="description"
                      class="w-full border border-gray-300 p-2 rounded text-gray-800">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Horas</label>
            <input type="number"
                   name="hours"
                   value="{{ old('hours') }}"
                   class="w-full border border-gray-300 p-2 rounded text-gray-800">
            @error('hours')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Fecha de comienzo</label>
            <input type="date"
                   name="starting_date"
                   value="{{ old('starting_date') }}"
                   class="w-full border border-gray-300 p-2 rounded text-gray-800">
            @error('starting_date')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Guardar
        </button>
    </form>

</x-layouts.layout>
