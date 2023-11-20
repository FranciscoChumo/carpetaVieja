<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::all();
        return response()->json([
            "producto" => $producto
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return response()->json([
            "message" => "producto creado"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $producto=Producto::find($id);
        return response()->json([
            "producto"=>$producto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
