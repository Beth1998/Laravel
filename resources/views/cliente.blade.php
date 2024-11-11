<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Cliente</title>
</head>
<body>
<a href="/informacion"><button>INFORMACION</button></a>
<hr>
    <form action="/guardar_informacion" method="post">
        @csrf 
        <label for="nombre">Nombre</label><br>
        <input type="text" name='nombre' id='nombre'> <br>

        <label for="apellido">Apellido</label><br>
        <input type="text" name='apellido' id='apellido'>

        <hr>
        <button type="submit">Guardar Datos</button>
    </form>
</body>
</html>