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
                <div style="background-color: white " class="col-11 mx-auto br-10 pb-4 mb-5 mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light col-11 mx-auto">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{Route::current()->getName()=='articles'?'active':''}}">
                              <a class="nav-link" href="{{route('articles')}}">پست ها</a>
                            </li>
                          </ul>
                        </div>
                    </nav>
                    @yield('content')
                </div>

            </main>
        </div>
    </body>


    <script src="{{ mix('js/app.js') }}" defer></script>


</html>
