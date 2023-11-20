<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TipoPersonaController;
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
Route::get('/persona', [PersonaController::class, 'obtener']);
Route::post('/persona', [TipoPersonaController::class, 'store']);
Route::get('/tipo/persona', [TipoPersonaController::class, 'getTipo']);