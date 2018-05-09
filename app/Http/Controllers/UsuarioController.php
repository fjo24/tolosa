<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsuarioRequest;
use App\User;

class UsuarioController extends Controller
{
    public function login(){
        return view('adm.login');
    }

    public function authentificate (UsuarioRequest $request) {

	return view('adm.cuerpo');
}

    /*    if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'nivel' => 'administrador'])) {
            return view('adm.cuerpo')->
            with('usuario',$request);
        }
        else{
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'nivel' => 'usuario'])) {
                return view('adm.cuerpo')->
                with('usuario',$request);
            }
            else {
                flash('Credenciales incorrectas')->error()->important();
                return redirect()->route('usuario.login');
            }
        }
    }*/

    public function logout(){
        Auth::logout();
        return redirect()->route('usuario.login');
    }

}
