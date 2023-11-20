<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = doctor::all();
        return response()->json([
            "videos" => $doctors
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        doctor::create($request->all());
        return response()->json([
            "message" => " creado"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor, $id)
    {
        $doctors=doctor::find($id);
        return response()->json([
            "doctor"=>$doctors
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        //
    }
}
