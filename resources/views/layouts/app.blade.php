<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Evenementenplanner</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 dark">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-blue-800 text-white shadow-lg py-4">
            <div class="container mx-auto flex justify-between items-center px-4">
                <h1 class="text-3xl font-bold">Evenementenplanner</h1>
                <nav class="space-x-4">
                    <a href="{{ route('events.index') }}" class="inline-block bg-indigo-500 dark:bg-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-lg shadow-lg transition duration-200 ease-in-out">
                        Home
                    </a>
                    <a href="{{ route('events.create') }}" class="inline-block bg-teal-500 dark:bg-teal-600 hover:bg-teal-600 dark:hover:bg-teal-700 text-white font-semibold px-4 py-2 rounded-lg shadow-lg transition duration-200 ease-in-out">
                        Nieuw Evenement
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="inline-block bg-red-500 dark:bg-red-600 hover:bg-red-600 dark:hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg shadow-lg">
                            Uitloggen
                        </button>
                    </form>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto p-6 flex-grow bg-gray-100 dark:bg-gray-800 shadow-md rounded-lg mt-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-300 py-6 mt-6">
            <div class="container mx-auto text-center">
                © 2024 Evenementenplanner. Alle rechten voorbehouden.
            </div>
        </footer>
    </div>
</body>
</html>