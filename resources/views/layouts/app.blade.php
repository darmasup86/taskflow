<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "TaskFlow") — TaskFlow</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">

    {{-- NAVBAR — ditulis SEKALI di sini, muncul di semua halaman --}}
   <nav class="bg-white border-b border-gray-200">
    <div class="max-w-screen-xl mx-auto px-4 flex items-center h-14">

        <a href="{{ route('dashboard') }}" class="font-semibold text-blue-600 text-lg mr-6">
            TaskFlow
        </a>

        <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 hover:text-blue-600 mr-6">
            Dashboard
        </a>

        <a href="{{ route('tasks.index') }}" class="text-sm text-gray-600 hover:text-blue-600 mr-6">
            Task Darma
        </a>

        <a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-blue-600">
            About
        </a>

    </div>
</nav>

    {{-- KONTEN — setiap halaman anak mengisi bagian ini --}}
    <main class="max-w-screen-xl mx-auto px-4 py-6">
        @yield("content")
    </main>

</body>
</html>
