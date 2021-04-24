<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;

class ProfesionalController extends Controller
{
    public function guardar(Request $data){
        $profesional = new Profesional();
        $profesional->usuario = $data["pusu"];
        $profesional->contraseña_usuario = $data["ppas"];
        $profesional->nombrec_usuario = $data["pnom"];
        $profesional->correo_usuario = $data["pema"];
        $profesional->telefono = $data["ptel"];
        $profesional->edad = $data["peda"];
        $profesional->id_categoria = $data["pcat"];
        $profesional->id_puntuacion = $data["ppun"];
        $profesional->descripcion_profesional = $data["pdes"];
        $profesional->save();
        return "Profesional Guardada";
    }
}
