<?php

namespace App\Http\Controllers;

use App\Models\doctores;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function buscador(Request $request )
    {
        $nombre = doctores::where("nombre","like",$request->texto."%")->take(10)->get();//usando una variable nombre que es igual a nuestro modelo donde se muestre por nombre el take es para cuantos nosotro podemos dejar ver
        return view("welcome",compact("nombres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctores $doctores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctores $doctores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctores $doctores)
    {
        //
    }
}
