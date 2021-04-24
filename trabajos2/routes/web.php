<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContratadorController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ValoracionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
    $resultados = DB::select("select * from contratador");
    dd($resultados);
});

Route::view("/ingreso-cat", "ingresarCategorias");
Route::post("/ingresar-cat", [CategoriaController::class, "guardar"], ["data", request()])->name("Guardar Categorias");
Route::get("/mostrar-cat", function (){
    return view("mostrarCategorias");
});

Route::view("/ingreso-val", "ingresarValoraciones");
Route::post("/ingresar-val", [ValoracionController::class, "guardar"], ["data", request()])->name("Guardar Valoraciones");
Route::get("/mostrar-val", function (){
    return view("mostrarValoraciones");
});

Route::view("/ingreso-profe", "ingresarProfesionales");
Route::post("/ingresar-profe", [ProfesionalController::class, "guardar"], ["data", request()])->name("Guardar Profesionales");
Route::get("/mostrar-profe", function (){
    return view("mostrarProfesionales");
});

Route::view("/ingreso-contra", "ingresarContratadores");
Route::post("/ingresar-contra", [ContratadorController::class, "guardar"], ["data", request()])->name("Guardar Contratador");
Route::get("/mostrar-contra", function (){
    return view("mostrarContratador");
});