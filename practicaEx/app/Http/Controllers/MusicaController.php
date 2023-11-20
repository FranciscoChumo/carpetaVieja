<?php

namespace App\Http\Controllers;

use App\Models\musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musica=musica::all(); 
        return response()->json(['musica'=>$musica], 200)  ;      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $musica=new musica();
        $musica->title=$request->title;
        $musica->title_short=$request->title_short;
        $musica->preview=$request->preview;
        $musica->duration=$request->duration;
        $musica->cover_small=$request->cover_small;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(musica $musica)
{
    $musica->delete();
    return response()->json(['message' => 'Musica deleted successfully'], 200);
}
}
