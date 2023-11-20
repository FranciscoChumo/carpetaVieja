<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Para acceder a todas las rutas o sus funciones de un solo controlador de forma automatizadas
route::resource('paciente',PacienteController::class);
/*
Para ver las rutas a las cuales sean creado ponemos el siguinte comando
-------
php artisan route:list

*/