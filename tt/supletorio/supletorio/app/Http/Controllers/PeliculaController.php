<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peliculas = Pelicula::all();
        return response()->json(['Peliculas'=>$peliculas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $file = request()->file('imagenP ');
        $obj = Cloudinary::upload($file->getRealPath(),['folder'=>'exa']);
        $imagen_id = $obj->getPublicId();
        $url = $obj->getSecurePath();
        $peliculas = Pelicula::create([
            'nombreP'=>$request->nombreP,
            'tipoP'=>$request->tipoP,
            'url_video'=>$request->url_video,
            'imagen_id'=>$imagen_id,
            'url'=>$url
        ]);
        return response()->json(['messages'=>'Se creo una todo.']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $peliculas = Pelicula::find($id);
        return response()->json(['Peliculas'=>$peliculas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $peliculas = Pelicula::find($id);

        $url = $peliculas->url_imagen;
        $imagen_id = $peliculas->imagen_id;
        if($request->hasFile('imagenP')){
            Cloudinary::destroy($imagen_id);
            $file = request()->file('imagenP');
            $obj = Cloudinary::upload($file->getRealPath(),['folder'=>'exa']);
            $url = $obj->getSecurePath();
            $imagen_id = $obj->getPublicId();
        }
        $peliculas->update([
            'nombreP'=>$request->nombreP,
            'tipoP'=>$request->tipoP,
            'url_video'=>$request->url_video,
            'imagen_id'=>$imagen_id,
            'url'=>$url
        ]);
        return response()->json([
            'messages'=>"Se Actualizo correctamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
       /*  $peliculas = Pelicula::find($id)->delete(); */
       $imagen = Pelicula::find($id);
       $imagen_id = $imagen->imagen_id;
       Cloudinary::destroy($imagen_id);
       Pelicula::destroy($id);


        return response()->json([
            'messages'=>"Se elimino correctamente"
        ]);
    }
}
