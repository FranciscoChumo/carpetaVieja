<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
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
    return redirect('/login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::post('/persona', [PersonaController::class, 'store'])->name('persona.create');
    Route::get('/dashboard', [PersonaController::class, 'index'])->name('dashboard');
    Route::get('/persona/{id}', [PersonaController::class, 'edit'])->name('persona.index');
    Route::delete('/persona/{id}', [PersonaController::class, 'delete'])->name('persona.destroy');
    Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('persona.update');
});
require __DIR__.'/auth.php';
