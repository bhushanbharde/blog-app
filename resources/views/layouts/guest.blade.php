<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Authentication' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md">

        {{-- Logo --}}
        <div class="text-center mb-8">

            <a href="/" class="text-4xl font-bold text-blue-600">
                BlogPlatform
            </a>

            <p class="text-gray-500 mt-2">
                Share your stories with the world
            </p>

        </div>

        {{-- Auth Card --}}
        <div class="bg-white p-8 rounded-2xl shadow-md">

            @yield('content')

        </div>

    </div>

</body>
</html>