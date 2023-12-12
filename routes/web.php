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
    return "Pagina Principal";
});

Route::get('/hola', function () {
    return "Hola que tal";
});

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Route::get('/posts/{posts}/comments/{comments}', function (string $postId, string $commentId){
    return 'Posts: '.$postId.' Comments: '.$commentId; 
});

use App\Http\Controllers\PrimerControlador;

Route::get('/usuari1', [PrimerControlador::class, 'usuari1']);
Route::get('/usuari2', [PrimerControlador::class, 'usuari2']);


Route::get('sign/signup', function () {
    return view('signup');
});


use App\Http\Controllers\SignController;

Route::get('/sign/signin', [SignController::class, 'showSignInForm']);
Route::get('/sign/signup', [SignController::class, 'showSignUpForm']);




/*

Route::get('/getNom', function () {
    return "Hello World";
});

Route::get('hola/{nom}', function ($nom) {
    return "Hola, ".$nom;
});

Route::get('/mostrar', function () {
    return view('mostra');
});


Route::get('/signup', [SignUpControlador::class, 'signup']);

Route::get('/professor/{email}', [HomeController::class, 'professor']);
Route::get('/alumne/{email}', [HomeController::class, 'alumne']);
Route::get('/centre/{email}', [HomeController::class, 'centre']);

*/