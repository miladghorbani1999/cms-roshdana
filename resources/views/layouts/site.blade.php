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
        {{ $header ?? "" }}
    </header>

    <!-- Page Content -->
    <main>
        <div  class="col-12 mx-auto br-10 pb-4 mb-5 mt-5 navbar-site">
            <nav class="navbar navbar-expand-lg navbar-light col-11 mx-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav col-12 pt-3">
                        <li class="nav-item pr-1 {{Request::routeIs('articles') ? 'active text-bold' : ''}}">
                            <a class="nav-link fs-12 text-bold {{Request::routeIs('articles') ? 'border-line-bottom pb-0 pl-0 pr-0' : ''}}" href="{{route('articles')}}">پست ها</a>
                        </li>
                        <li class="nav-item pr-4" >
                            <a class="nav-link fs-12 text-bold " href="">نمونه‌کارهای‌من</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link fs-12 text-bold " href="">درباره‌من</a>
                        </li>
                        <li class="nav-item pr-4 ">
                            <a class="nav-link fs-12 text-bold " href="">ارتباط‌با‌من</a>
                        </li>
                        <li class="nav-item register-author">
                            <a class="btn btn-primary" href="#" role="button">ثبت‌نام‌در‌خبرنامه</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('top-content')
            @yield('content')
        </div>

    </main>
</div>
</body>

<script src="{{ mix('js/app.js') }}" defer></script>

</html>
