<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
//OBTENER TODOS LOS PRODUCTOS
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));// Retorna la vista con todos los productos
    }


    public function create()
    {
        return view('products.create'); // Retorna la vista para crear un nuevo productoRETURNA LA VISTA PARA CREAR UN NUEVO PRODUCTO
    }


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Crear un nuevo producto
        Product::create($request->all());

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }


    public function show(Product $product)
    {
        //ver un producto
        

        return view('products.show', compact('product')); // Retorna la vista con los detalles del producto



    }


    public function edit(Product $product)
    {
        //editar un producto
        return view('products.edit', compact('product')); // Retorna la vista para editar el
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
                $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
        
    }
}
