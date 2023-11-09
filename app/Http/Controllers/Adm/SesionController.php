<?php

namespace App\Http\Controllers\adm;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function abrir(Request $request){
        $identidad = $request->input('identidad');
        $clave = $request->input('clave');
        
        // Busqueda y carga del usuario
        $usuario = Usuario::whereRaw(" BINARY identidad = BINARY \"$identidad\"")
        ->where('clave','=', md5($clave))->first();
        
        if($usuario == null){
            session()->flash('msgError', 'Credencial inválida');
            return redirect()->back();
        }

        session(['usuario' => $usuario]);

        return redirect()->route('adm.inicio');
    }

    public function cerrar() { 
        // Limpieza de la sesión
        session()->flush();
        
        return redirect()->route('adm.login');
    }
}
