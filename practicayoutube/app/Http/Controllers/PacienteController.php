<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //vamos a consultar atraves del modelo paciente y vamos a tomar 5 registro 
        //se almacena en la variable va a tener el nombre de paciente
        $datos['paciente']=paciente::paginate(5);
        return view('paciente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //la variable datospaciente responde y all que los llama a todos eso inclueye al botony al token
        //$datospaciente = request()->all();

        //esta variable de nos responde exectuando el token
        $datospaciente = request()->except('_token');
       //hacemos una validacion si hay fotografias
        if($request->hasFile('foto')){
            //vamos a alterar el campo y vamso utilizar el nombre de ese campo ademas vamos a insertarlo en la carpeta
            $datospaciente['foto']=$request->file('foto')->store('uploads','public');
            // la foto esta en la carpeta store ya teniendo la ruta y el archivo 
        }
        //agarramos el modelo inserta la base de datos los resultados
        paciente::insert($datospaciente);
        //este return nos reponde en un json donde se guarda la variable  
        return response()->json($datospaciente);

    }

    /**
     * Display the specified resource.
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //se le pasa el id que es el que se utiliza para borrar
        paciente::destroy($id);
        return redirect('pacientes');
    }
}
