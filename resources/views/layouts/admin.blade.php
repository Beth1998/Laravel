<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <title>Document</title>
</head>
<body>

<section class = "flex-admin">
    <div class = "flex-admin1">
        <ul>
        <li><a href="/admin" ADMINISTRACION DE COMPUTADORAS</li>
        <li>ADMINISTRACION DE HERRAMIENTAS</li>
        <li>SERVICIO TÉCNICO</li>
        </ul>
    </div>
    <div class = "flex-admin2">
        <h1>PANEL DE CONTROL</h1>
        @yield('content')
    </div>
</section>
    
</body>
</html>