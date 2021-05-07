<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Val_pro;

class ValProController extends Controller
{
    public function guardar(Request $data){

        $data->validate([
            'puntaje' => 'required',
            'opinion' => 'required',
            'id_pro' => 'required',
            'id_cont' => 'required'
        ]);

        $valpro = new Val_pro();
        $valpro->puntaje = $data["pun"];
        $valpro->opinion = $data["opi"];
        $valpro->id_pro = $data["vprip"];
        $valpro->id_cont = $data["vpric"];
        $valpro->save();
        return "Valoracion de Profesional Guardada";
    }

    public function mostrar(){
        $vervalpro = Val_pro::get();
        return view("mostrarValprofes", ["vervalpro"=>$vervalpro]);
    }
}
