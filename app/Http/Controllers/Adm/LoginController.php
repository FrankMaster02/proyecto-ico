<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        if(!is_null(session('usuario'))) return redirect()->route('adm.inicio');

        return view('adm.login');
    }
}
