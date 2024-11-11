<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Ingresar Cliente</title>
</head>
<body>
    <a href="/cliente"><button>INICIO</button></a>
    <section class = "container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Acciones</th>
    </tr>
    
  </thead>
  <tbody>
    @foreach($getCliente as $getClientes)
    <tr>
      <th scope="row">{{$getClientes->id}}</th>
      <td>{{$getClientes->nombre}}</td>
      <td>{{$getClientes->apellido}}</td>
      <td><button type="button" class="btn btn-primary"><a href="/editar/{{$getClientes->id}}">EDITAR</a></button>
      <form action="/eliminar/{{$getClientes->id}}" method = "post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">ELIMINAR</button>
      </form>
    </tr>
    @endforeach()
  </tbody>
</table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>