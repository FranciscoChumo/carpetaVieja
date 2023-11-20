<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;
/**
* @OA\Info(
*             title="Api de personas", 
*             version="1.0",
*             description="listado de la api persona"
* )
*
* @OA\Server(url="http://127.0.0.1:8000")
*/
class Personas extends Controller
{
    /**
     * Muestra de todos los datos personas
     * @OA\Get (
     *     path="/api/auth/persona",
     *     tags={"persona"},
     *     @OA\Response(
     *         response=200,
     *         description="ejecucion perfecta",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombres",
     *                         type="string",
     *                         example="rafael"
     *                     ),
     *                     @OA\Property(
     *                         property="cedula",
     *                         type="string",
     *                         example="111111111"
     *                     ),
     *                     @OA\Property(
     *                         property="direccion",
     *                         type="string",
     *                         example="Bolivar"
     *                     ),
     *                     @OA\Property(
     *                         property="fecha_nacimiento",
     *                         type="string",
     *                         example="2023-02-10"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
     public function mostrarDatos(){
 
        $datos = DB::table('personas')
                    ->join('users', 'personas.id', '=', 'users.persona_id')
                    ->join('roles', 'users.rol_id', '=', 'roles.id')
                    ->select('personas.*', 'users.name', 'roles.rol')
                    ->where('personas.estado',true)
                    ->get();

         return response()->json(['datos'=>$datos]);           
   }
 /**
     * Delete Todo
     * @OA\Delete (
     *     path="/api/todo/delete/{id}",
     *     tags={"ToDo"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="delete todo success")
     *         )
     *     )
     * )
     */
   public function delete($idpersona){
      $persona= Persona::find($idpersona);
      if($persona->estado==false){
         return response()->json(['message'=>"El Registro ya ha sido eliminado anterioemente"]);          
      }
      $persona->estado=false;
      $persona->save();
      return response()->json(['message'=>"Registro eliminado"]);          
   }

   public function update(Request $request, $idpersona){
      
      if(empty($request->nombre) || empty($request->cedula) ||empty($request->direccion)||empty($request->fecha_nacimiento)){
         return response()->json(['message'=>"No se permiten campos vacios"]);   
      }

      if(empty($idpersona)){

         return response()->json(['message'=>"El id no puede estar vacio"]);          
      }
      $persona= Persona::find($idpersona);
      if($persona->estado==false){
         return response()->json(['message'=>"El Registro ya ha sido eliminado anterioemente"]);          
      }
      
      $persona->nombre=$request->nombre;
      $persona->direccion=$request->direccion;
      $persona->cedula=$request->cedula;
      $persona->fecha_nacimiento=$request->fecha_nacimiento;

      $persona->save();
      return response()->json(['message'=>"Registro update"]);          
   }



}
