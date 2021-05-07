<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;

class ProfesionalController extends Controller
{
    public function guardar(Request $data){

        $data->validate([
            'usuario' => 'required',
            'contraseña_usuario' => 'required',
            'nombrec_usuario' => 'required | alpha',
            'correo_usuario' => 'required | min:14',
            'telefono' => 'required',
            'edad' => 'required',
            'id_categoria' => 'required',
            'descripcion_profesional' => 'required | min:15'
        ]);

        $profesional = new Profesional();
        $profesional->usuario = $data["pusu"];
        $profesional->contraseña_usuario = $data["ppas"];
        $profesional->nombrec_usuario = $data["pnom"];
        $profesional->correo_usuario = $data["pema"];
        $profesional->telefono = $data["ptel"];
        $profesional->edad = $data["peda"];
        $profesional->id_categoria = $data["pcat"];
        $profesional->descripcion_profesional = $data["pdes"];
        $profesional->save();
        return "Profesional Guardada";
    }

    public function mostrar(){
        $verprofesional = Profesional::get();
        return view("mostrarProfesionales", ["verprofesional"=>$verprofesional]);
    }
}
