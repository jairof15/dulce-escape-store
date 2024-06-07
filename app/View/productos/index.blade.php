<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Lista de Productos</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Costo</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->cost }}</td>
                    <td>{{ $product->profit }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
