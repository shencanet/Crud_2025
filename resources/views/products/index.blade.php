<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas crear este producto?')">crear</button>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('products.create') }}">Crear Nuevo Producto</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}"  method="POST"></form>
                        @csrf
                        @method('DELETE')
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

