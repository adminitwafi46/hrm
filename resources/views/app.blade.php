<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'HRM') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="/dist/css/adminlte.min.css?v=3.2.0">
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="hold-transition sidebar-mini">
        @inertia
        <script src="/plugins/jquery/jquery.min.js"></script>

        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="/dist/js/adminlte.min.js?v=3.2.0"></script>

        <script src="/dist/js/demo.js"></script>
    </body>
</html>
