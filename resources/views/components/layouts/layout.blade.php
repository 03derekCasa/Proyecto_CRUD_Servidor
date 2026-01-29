<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto CRUD Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

@include('partials.nav')

<main class="flex-1 w-full px-6 py-6">
    {{ $slot }}
</main>

@include('partials.footer')

</body>
</html>
