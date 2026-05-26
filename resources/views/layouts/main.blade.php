<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neura Bloom</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFF7F7] text-[#3D2B2B]">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>