<html>
<head>
    <title>@yield('title', 'Practica')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contac">Contacto</a></li>
            <li><a href="/portafolio">Portafolio</a></li>
        </ul>
    </nav>
    @yield('content') <!-- Para agregar contenido dinamicamente a las vistas -->
</body>
</html>