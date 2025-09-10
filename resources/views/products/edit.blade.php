<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product-> id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        <br><br>
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
        <br><br>
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required>{{ $product->description }}</textarea>
        <br><br>
        <button type="submit">Actualizar</button>

    </form>


</body>
</html>
