<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Hotel con Amore</title>
    @vite(['resources/css/auth_register.css'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar transparent-navbar">
            <div class="logo">
                <img src="{{ asset('images/H.webp') }}" alt="Logo Hotel con Amore">
            </div>
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Servizi</a></li>
                <li><a href="{{ route('whois') }}" class="{{ request()->routeIs('whois') ? 'active' : '' }}">Chi Siamo</a></li>
                <li><a href="{{ route('work-with-us') }}" class="{{ request()->routeIs('work-with-us') ? 'active' : '' }}">Lavora con Noi</a></li>
                <li><a href="{{ route('spa-booking') }}" class="{{ request()->routeIs('spa-booking') ? 'active' : '' }}">Spa</a></li>
                <li>
                    <a href="{{ route('login') }}">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Hotel con Amore - Tutti i diritti riservati</p>
        <p>Seguici sui social:
            <a href="https://facebook.com" target="_blank">Facebook</a> |
            <a href="https://instagram.com" target="_blank">Instagram</a>
        </p>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
