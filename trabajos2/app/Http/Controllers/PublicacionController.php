<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionController extends Controller
{
    public function guardar(Request $data){

        $data->validate([
            'titulo_publi' => 'required | alpha',
            'des_publi' => 'required | alpha | min:100',
            'id_profe' => 'required'
        ]);

        $publicacion = new Publicacion();
        $publicacion->titulo_publi = $data["ptp"];
        $publicacion->des_publi = $data["pdp"];
        $publicacion->id_profe = $data["pip"];
        $publicacion->save();
        return "Publicacion Guardada";
    }

    public function mostrar(){
        $verpublicacion = Publicacion::get();
        return view("mostrarPublicacion", ["verpublicacion"=>$verpublicacion]);
    }

    public function mostrarPublicacion(int $id_publi){
        $updatepubli = Publicacion::where("id_publi", $id_publi)->get();
        return view("actualizarPublicacion", ["updatepubli"=>$updatepubli]);
    }

    public function actualizar(Request $request){
        $publi = Publicacion::find($request->id_publi);
        $publi->titulo_publi = $request->titulo_publi;
        $publi->des_publi = $request->des_publi;
        $publi->id_profe = $request->id_profe;
        $publi->save();
        return redirect("/mostrar-publi");

    }

}
