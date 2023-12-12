<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller{

    public function showSignInForm() {
        return view('signin.signin');
    }

    public function showSignUpForm() {
        return view('signup.signup');
    }

}
