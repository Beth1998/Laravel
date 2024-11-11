<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Cliente</title>
</head>
<body>
    <h1>EDITAR CLIENTE</h1>
    <form action="/actualizar_Info/{{$editCliente->id}}" method="post">
        @csrf 
        @method('put')
        <label for="nombre">Nombre</label><br>
        <input value="{{$editCliente->nombre}}" type="text" name='nombre' id='nombre'> <br>

        <label for="apellido">Apellido</label><br>
        <input value="{{$editCliente->apellido}}" type="text" name='apellido' id='apellido'>

        <hr>
        <button type="submit">Actualizar Datos</button>
    </form>
</body>
</html>