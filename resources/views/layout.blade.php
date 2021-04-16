<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        .active{
            text-decoration: none;
            color: green;
        }
    </style>
    
    <title>Mi sitio</title>
</head>
<body>
    <header>
        <?php
            function activeMenu($url)
            {
                return request()->is($url) ? 'active' : '';
            }   
        ?>

        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
            <a class="{{ activeMenu('saludo/*') }}" href="{{ route('saludo','Mauricio') }}">Saludo</a>
            <a class="{{ activeMenu('contactame') }}" href="{{ route('contacto') }}">Contactos</a>
        </nav>
    </header>
    @yield('contenido')
    <footer>Copyright {{ date('Y') }}</footer>
</body>
</html>