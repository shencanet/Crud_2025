<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
</head>
<body>
    <h1>Nuevo Producto</h1>

    <a href="{{ route ('products.index') }}">atras</a>
    <br>
    <label>ID:</label>
    <p>{{ $product->id}}</p>
        <label>Precio:</label>
    <p>{{ $product->price}}</p>
        <label>Descripcion:</label>
    <p>{{ $product->description}}</p>
    



</body>
</html>
