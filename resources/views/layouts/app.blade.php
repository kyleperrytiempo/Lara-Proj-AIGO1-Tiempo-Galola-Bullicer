<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'For Eyes Optical')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <a href="{{ url('/') }}" class="nav-brand">For Eyes</a>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; 2026 For Eyes Optical. All rights reserved.</p>
        <p>Made by: <strong>Tiempo</strong> (Home), <strong>Galola</strong> (About), <strong>Bullicer</strong> (Contact)</p>
    </footer>

    @stack('scripts')
</body>
</html>