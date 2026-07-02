<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} — {{ $profile['role'] }}</title>
    <meta name="description" content="{{ $profile['tagline'] }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js dipakai untuk interaksi ringan (menu mobile, dsb) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="antialiased">

    @include('partials.loading-screen')

    <div id="site-content" class="site-enter">
        @include('partials.navbar')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

</body>
</html>
