<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
class PersonaController extends Controller
{
    
    public function store(Request $request){
        Persona::create([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
            "cedula" => $request->cedula
        ]);
        return redirect('/dashboard');
    }
    public function update($id,Request $request){
           $persona= Persona::find($id);
           $persona->nombre = $request->nombre;
           $persona->apellido = $request->apellido;
           $persona->cedula = $request->cedula;
           $persona->save();
        return redirect('/dashboard');
    }
    public function delete($id){
        $persona= Persona::find($id);
        $persona->estado = false;
        $persona->save();
        return redirect('/dashboard');
    }
    public function index(){
        $personas= Persona::where('estado', true)->get();
        return view ('dashboard', compact('personas'));
    }
    public function edit($id){
        $persona= Persona::find($id);
        return view ('editPersona', compact('persona'));
    }
}
