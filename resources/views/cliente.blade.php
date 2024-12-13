<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Cliente</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/informacion"><button>INFORMACION</button></a>
<a href="/home2"><button>cerrar sesion</button></a>
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