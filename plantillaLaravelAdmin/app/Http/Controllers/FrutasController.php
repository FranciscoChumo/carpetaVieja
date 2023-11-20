<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frutas;

class FrutasController extends Controller
{
   
    public function store(Request $request){
        Frutas::create([
            "nombre" => $request->nombre,
            "cantidad" => $request->cantidad,
            "proveedor" => $request->proveedor
        ]);
        return redirect('/frutas');
    }
    public function delete($id){
        $fruta= Frutas::find($id);
        $fruta->estado = false;
        $fruta->save();
        return redirect('/frutas');
    }
    public function index(){
        $frutas= Frutas::where('estado', true)->get();
        return view ('moduloPersona.persona', compact('frutas'));
    }
    
}
