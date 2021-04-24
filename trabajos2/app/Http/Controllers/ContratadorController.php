<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contratador;

class ContratadorController extends Controller
{
    public function guardar(Request $data){
        $contratador = new Contratador();
        $contratador->usuario = $data["usu"];
        $contratador->contraseña_usuario = $data["pass"];
        $contratador->nombrec_usuario= $data["nom"];
        $contratador->correo_usuario= $data["ema"];
        $contratador->save();
        return "Contratador Guardada";
    }
}
