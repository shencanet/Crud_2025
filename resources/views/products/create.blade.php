<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
</head>
<body>
    <h1>Nuevo Producto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br><br>
        <label for="description">Descripción:</label>
        <textarea id="description" name="description"></textarea>
        <br><br>
        <button type="submit">Crear Producto</button>

    </form>


</body>
</html>

