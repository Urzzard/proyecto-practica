<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <style>
        body{
            background: rgb(51, 146, 51);
            color: antiquewhite;
        }
        a{
            color: aqua;
        }
        
        ;
    </style>
    <center><h1>BIENVENIDOS A LA PAGINA DE SERVICIOS</h1></center>

    <nav>
        <a href="/mostrar-profe">Ver Profesionales</a>
        <a href="/ingreso-profe">Agregar Profesionales</a>
    </nav>
    <br>
    <nav>
        <a href="/mostrar-cat">Ver Categorias</a>
        <a href="/ingreso-cat">Agregar Categorias</a>
    </nav>
    <br>
    <nav>
        <a href="/mostrar-contra">Ver Contratadores</a>
        <a href="/ingreso-contra">Agregar Contratadores</a>
    </nav>
    <br>
    <nav>
        <a href="/mostrar-publi">Ver Publicacion</a>
        <a href="/realizo-publi">Agregar Publicacion</a>
    </nav>
    <br>
    <nav>
        <a href="/mostrar-valpubli">Ver Valoracion de Publicacion</a>
        <a href="/valoro-publi">Agregar Valoracion de Publicacion</a>
    </nav>
    <br>
    <nav>
        <a href="/mostrar-valpro">Ver Valoracion de Profesional</a>
        <a href="/valoro-pro">Agregar Valoracion de Profesional</a>
    </nav>    
    <br>
    <section>
        @yield('torax')
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>