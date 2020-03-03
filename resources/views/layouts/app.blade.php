<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jon Zenor &bull; Christian | Programmer | Photographer | Author</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Girassol|Playfair+Display:600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="w-full bg-black md:flex md:flex-row">
        <div class="text-center md:text-left md:flex-col">
            <a href="/"><img src="{{ asset('images/JonZenor.png') }}" class="p-2 sm:w-1/2 m-auto md:mx-4 md:w-1/3"></a>
        </div>

        <div class="text-center md:text-right text-white m-2 w-full p-2">
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
