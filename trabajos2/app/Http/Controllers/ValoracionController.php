<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valoracion;

class ValoracionController extends Controller
{
    public function guardar(Request $data){
        $valoracion = new Valoracion();
        $valoracion->puntaje = $data["pun"];
        $valoracion->opinion = $data["opi"];
        $valoracion->save();
        return "Valoracion Guardada";
    }
}
