<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title_tag ?? 'عبارات پیش فرض' }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/site/index.css') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
        <link rel="stylesheet" href="{{ mix('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ mix('css/fonts/yekan_font.css') }}">
        <!-- Scripts -->


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen ">

            <!-- Page Heading -->
            <header class="text-white">
               {{ $header ?? " " }}
            </header>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>


    <script src="{{ mix('js/app.js') }}" defer></script>


</html>
