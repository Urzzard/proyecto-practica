<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contratador;

class ContratadorController extends Controller
{
    public function guardar(Request $data){

        $data->validate([
            'usuario' => 'required',
            'contraseña_usuario' => 'required',
            'nombrec_usuario' => 'required | alpha',
            'correo_usuario' => 'required | min: 14'
            
        ]);

        $contratador = new Contratador();
        $contratador->usuario = $data["usu"];
        $contratador->contraseña_usuario = $data["pass"];
        $contratador->nombrec_usuario= $data["nom"];
        $contratador->correo_usuario= $data["ema"];
        $contratador->save();
        return "Contratador Guardada";
    }

    public function mostrar(){
        $vercontratador = Contratador::get();
        return view("mostrarContratadores", ["vercontratador"=>$vercontratador]);
    }
}
