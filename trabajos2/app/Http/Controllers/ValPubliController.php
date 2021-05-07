<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Val_publi;

class ValPubliController extends Controller
{
    public function guardar(Request $data){

        $data->validate([
            'puntaje' => 'required',
            'id_publi' => 'required',
            'id_contra' => 'required'
        ]);

        $valpubli = new Val_publi();
        $valpubli->puntaje = $data["vpp"];
        $valpubli->id_publi = $data["vpip"];
        $valpubli->id_contra = $data["vpic"];
        $valpubli->save();
        return "Valoracion de Publicacion Guardada";
    }

    public function mostrar(){
        $vervalpubli = Val_publi::get();
        return view("mostrarValpublicacion", ["vervalpubli"=>$vervalpubli]);
    }
}
