<x-layouts.layout>
    <div class="w-screen min-h-screen px-8 py-8">

        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ __(session('success')) }}
            </div>
        @endif

        <div class="mb-6">
            <a href="{{ route('projects.create') }}">
                <button class="btn btn-primary">
                    Agregar Project
                </button>
            </a>
        </div>

        <div class="w-full overflow-x-auto bg-white shadow rounded-lg p-4">
            <table class="table table-zebra w-full">
                <thead>
                <tr>
                    @foreach($fields as $field)
                        <th>{{ $field }}</th>
                    @endforeach
                    <th class="text-right">Editar</th>
                    <th class="text-right">Borrar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($projects as $project)
                    <tr class="hover:bg-gray-100">
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->hours }}</td>
                        <td>{{ $project->starting_date }}</td>

                        <td class="text-right">
                            <a href="{{ route('projects.edit', $project->id) }}">
                                <button class="btn btn-sm btn-primary">Editar</button>
                            </a>
                        </td>

                        <td class="text-right">
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button onclick="confirmar(event)"
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>

    <script>
        function confirmar(e) {
            e.preventDefault();
            const button = e.currentTarget;
            const form = button.closest("form");

            Swal.fire({
                title: "Confirmar borrado",
                text: "¿Seguro que quieres borrar?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, borrar"
            }).then((response) => {
                if (response.isConfirmed) form.submit();
            });
        }
    </script>
</x-layouts.layout>
