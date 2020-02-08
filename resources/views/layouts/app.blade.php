<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="w-full bg-black flex flex-row">
        <div class="text-left flex-col">
            <img src="{{ asset('images/JonZenor.png') }}" style="height: 75px" class="p-2">
        </div>

        <div class="text-right text-white m-2 w-full p-2">
            <div class="h-full mt-4 mr-6">BLOG</div>
        </div>
    </div>

    <div class="w-full h-full">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
