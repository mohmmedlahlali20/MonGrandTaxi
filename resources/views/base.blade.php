<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} | @yield('Titel')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c0bae2ffa6.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased">

    @include('partials.nav')
    
    @auth
    <br>
        <div class="mx-auto max-w-screen-lg">
        <form action="" method="post"> <input
                class="w-full h-16 px-3 rounded mb-8 focus:outline-none focus:shadow-outline text-xl px-8 shadow-lg bg-gray-900 text-gray-100"
                type="search" name="query" placeholder="Search...">
        </form>
    </div>
    @endauth
    
    <div class="container">
        @yield('content')
    </div>
    

    @include('partials.footer')
</body>

</html>
