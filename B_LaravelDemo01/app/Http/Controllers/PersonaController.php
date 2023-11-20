<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PersonaController extends Controller
{
    public function obtener(){
        $nombre='Alfonso Tomas';

        $users=User::all();
        return view ('info', compact('nombre','users'));
    }

}
