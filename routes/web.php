<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getNom', function () {
    return "Hello World";
});

Route::get('hola/{nom}', function ($nom) {
    return "Hola, ".$nom;
});

Route::get('/mostrar', function () {
    return view('mostra');
});

Route::get('/sign/signup', function () {
    return view('signup');
});



