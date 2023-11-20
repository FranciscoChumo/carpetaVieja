<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return response()->json([
            "videos" => $videos
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Video::create($request->all());
        return response()->json([
            "message" => "video creado"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $video=Video::find($id);
        return response()->json([
            "video"=>$video
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $video=Video::find($id);
        $video->update($request->all());
        return response()->json([
            "message"=>"video actualizado"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
