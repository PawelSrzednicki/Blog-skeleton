<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main id="app">
        <aside class="off-canvas position-left reveal-for-large" id="offCanvas" data-off-canvas>
            @include('inc.admin_navbar')
        </aside>
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="">
                @include('inc.admin_topbar')
                @yield('content')
            </div>
        </div>
    </main>
    <script>
        $(document).foundation();
    </script>
</body>

</html>