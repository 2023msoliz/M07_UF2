<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function professor($email)
    {
        return view('professor', compact('email'));
    }

    public function alumne($email)
    {
        return view('alumne', compact('email'));
    }

    public function centre($email)
    {
        return view('centre', compact('email'));
    }
}

