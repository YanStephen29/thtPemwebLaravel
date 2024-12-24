<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo-title">
            <img src="{{ asset('images/logo.png') }}" alt="Church">
            <h1>NHKBP Srengseng Sawah</h1>
        </div>
        <div>
            <nav class="nav-menu">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('join') }}">Join</a>
            </nav> 
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 NHKBP Srengseng Sawah. All Rights Reserved.</p>
    </footer>
</body>
</html>
