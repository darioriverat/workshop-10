<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
</head>
<body>
<section id="app">
    @include('layouts.header')
    <div class="container py-5">
        @yield('content')
    </div>
</section>
</body>
</html>