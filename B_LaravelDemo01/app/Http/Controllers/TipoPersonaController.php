<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPersona;

class TipoPersonaController extends Controller
{
    
    public function getTipo(){
        $tipos = TipoPersona::all();
        return view ('tiposPersona', compact('tipos'));
    }

    public function store(Request $request){

        dd($request->all());

        $tipo= new TipoPersona();
        $tipo->tipo = $request->tp;
        $tipo->save();

    }
}
