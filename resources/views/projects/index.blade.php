@extends('components.layouts.layout')

@section('content')
    <div class="w-screen min-h-screen px-8 py-8 bg-gray-100">

        <div class="mb-6">
            <a href="{{ route('projects.create') }}"
               class="bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-indigo-700">
                Agregar Project
            </a>
        </div>

        <div class="w-full min-h-[60vh] overflow-x-auto overflow-y-auto bg-white shadow-lg rounded-lg p-6">

            <table class="w-full border-collapse text-lg">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-4 text-left">Nombre</th>
                    <th class="px-6 py-4 text-left">Descripción</th>
                    <th class="px-6 py-4 text-left">Horas</th>
                    <th class="px-6 py-4 text-left">Inicio</th>
                    <th class="px-6 py-4 text-left">Acciones</th>
                </tr>
                </thead>

                <tbody class="text-gray-900">
                @foreach ($projects as $project)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $project->name }}</td>
                        <td class="px-6 py-4">{{ $project->description }}</td>
                        <td class="px-6 py-4">{{ $project->hours }}</td>
                        <td class="px-6 py-4">{{ $project->starting }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('projects.edit', $project) }}"
                               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
