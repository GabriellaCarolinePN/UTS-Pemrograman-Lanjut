<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">Website Profile Lala</a>
            <ul class="navbar-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('portfolio') }}">Portofolio</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
