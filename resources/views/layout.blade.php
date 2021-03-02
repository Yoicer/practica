<html>
<head>
    <title>@yield('title', 'Practica')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials/nav')
    @yield('content') <!-- Para agregar contenido dinamicamente a las vistas -->
</body>
</html>