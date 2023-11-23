<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin()
    {
        return view('signin')->with("title","iniciar sesion");
    }

    public function signup() {
        return view('signup')->with("title","Crear cuenta");
    }
}
