<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContratadorController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ValProController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ValPubliController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

/*Route::view("/ingreso-cat", "ingresarCategorias");
Route::post("/ingresar-cat", [CategoriaController::class, "guardar"], ["data", request()])->name("Guardar Categorias");*/

/*
Route::view("/valoro-pro", "valorarProfesionales");
Route::post("/valorar-pro", [ValProController::class, "guardar"], ["data", request()])->name("Guardar Valoraciones Profesionales");
Route::get("/mostrar-valpro", [ValProController::class, "mostrar"]);

Route::view("/ingreso-profe", "ingresarProfesionales");
Route::post("/ingresar-profe", [ProfesionalController::class, "guardar"], ["data", request()])->name("Guardar Profesionales");


Route::view("/ingreso-contra", "ingresarContratadores");
Route::post("/ingresar-contra", [ContratadorController::class, "guardar"], ["data", request()])->name("Guardar Contratador");
Route::get("/mostrar-contra", [ContratadorController::class, "mostrar"]);

Route::view("/realizo-publi", "realizarPublicacion");
Route::post("/realizar-publi", [PublicacionController::class, "guardar"], ["data", request()])->name("Guardar Publicacion");
Route::get("/mostrar-publi", [PublicacionController::class, "mostrar"]);
Route::get("/actualizar-publi/{id_publi}", [PublicacionController::class, "mostrarpublicacion"]);
Route::get("/actualizar-publi", [PublicacionController::class, "actualizar"]);

Route::view("/valoro-publi", "valorarPublicacion");
Route::post("/valorar-publi", [ValPubliController::class, "guardar"], ["data", request()])->name("Guardar Valoraciones Publicaciones");
Route::get("/mostrar-valpubli", [ValPubliController::class, "mostrar"]);*/

Route::view("/", "bienvenida")->name('/');

Route::view("/inicio", "inicio");
Route::get('{users}/verperfil', [UserController::class, 'verperfil'])->name('verperfil');

Auth::routes();

Route::get("/mostrar-us", [RegisterController::class, "mostrar"]);

Route::get('{users}/home', [UserController::class, 'home'])->name('home');
Route::get("/mostrar-profe", [ProfesionalController::class, "mostrar"]);
Route::get("/mostrar-cat", [CategoriaController::class, "mostrar"]);
Route::post('session',[UserController::class,'sessionvalidada'])->name('session');