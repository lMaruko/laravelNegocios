<?php

use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\ClasesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\SeccionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect()->route("carrera.index");
})->name('carreras');

Route::resource('carrera', CarrerasController::class);
Route::resource('clases', ClasesController::class);
Route::resource('estudiantes', EstudiantesController::class);
Route::resource('maestros', MaestrosController::class);
Route::resource('matriculas', MatriculaController::class);
Route::resource('secciones', SeccionController::class);

// Route::get('/clases', [ClasesController::class,'index'])->name('clases');
// Route::get('/estudiantes', [EstudiantesController::class,'index'])->name('estudiantes');
// Route::get('/maestros', [MaestrosController::class,'index'])->name('docentes');
// Route::get('/matriculas', [MatriculaController::class,'index'])->name('matriculas');
// Route::get('/secciones', [SeccionController::class,'index'])->name('secciones');
