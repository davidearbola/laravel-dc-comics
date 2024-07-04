<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>@yield('title', 'Hello Laravel World')</title>
    @vite('resources/js/app.js')
</head>

<body>

    <body>
        <header class="bg-white">
            @include('partials.header')
        </header>
        <main>
            @yield('content')
            @include('partials.iconDc')
        </main>
        <footer>
            @include('partials.linkFooter')
            @include('partials.socialFooter')
        </footer>
    </body>

</body>

</html>
