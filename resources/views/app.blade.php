<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

        <!-- Styles -->
{{--        <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
        <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">

        <!-- Scripts -->
        @routes
{{--        <script src="{{ mix('js/app.js') }}" defer></script>--}}
        <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
