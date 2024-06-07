<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $producto->nombre }}</h1>
        <p>{{ $producto->descripcion }}</p>
        <p>Precio: ${{ $producto->precio }}</p>
        <a href="{{ route('productos.index') }}">Volver a la lista</a>
    </div>
</body>
</html>
    