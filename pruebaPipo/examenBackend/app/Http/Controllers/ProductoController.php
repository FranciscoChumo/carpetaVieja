<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=producto::all();
        return response()->json(["productos" => $productos],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {$productos = new producto();

        // Validar si el nombre del producto ya existe en la base de datos
        $productoExistente = producto::where('nombre', $request->nombre)->first();
        
        if ($productoExistente) {
            return response()->json(['error' => 'El nombre del producto ya está en uso'], 400);
        } else {
            // El nombre del producto no está duplicado, puedes crear el nuevo producto
            $productos->nombre = $request->nombre;
            $productos->precio = $request->precio;
            $productos->cantidadStock = $request->cantidadStock;
            $productos->save();
        
            // Devuelve una respuesta de éxito en la API
            return response()->json(['message' => 'Producto creado exitosamente'], 201);
        }
        
    }
    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        //
    }
}
