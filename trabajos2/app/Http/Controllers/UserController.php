<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function mostrar(User $users){
        $verusuario = User::get();
        return view("mostrarUsers", ["verusuario"=>$verusuario]);
    }

    public function sessionvalidada(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $users = User::where('email',$request->email)->first();
        if (password_verify($request->password, $users->password)){
            session_start();
            $_SESSION['user'] = $users;
            return redirect()->route('home',$users);
        }else{
            return redirect()->route('/');
        }
    }

    public function verperfil(User $users){
        $perfil = new User();
        $verperfil = $perfil::where('users.id', '=', $users->id)
                                ->join('tipo_usuarios', 'users.tipo', '=','tipo_usuarios.id_categoria')
                                ->get();
        return view("mostrarUsers", ['verperfil'=>$verperfil]);
    }
}

