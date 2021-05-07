<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function guardar(Request $data){

        $data->validate([
            'nombre_categoria' => 'required | alpha'
        ]);

        $categoria = new Categoria();
        $categoria->nombre_categoria = $data["cat"];
        $categoria->save();
        return "Categoria Guardada";
    }
    public function mostrar(){
        $vercategoria = Categoria::get();
        return view("mostrarCategorias", ["vercategoria"=>$vercategoria]);
    }
}
