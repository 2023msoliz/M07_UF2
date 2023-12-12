<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller {

    // Método para el primer usuario
    public function usuari1($dato1 = '') {
        $textFinal = 'Usuari1: Roger ';
        $textFinal .= ($dato1 == '') ? 'Sense cognom' : $dato1;
        return view('viewUsuaris')->with('nomUsuari', $textFinal);
    }

    // Método para el segundo usuario
    public function usuari2() {
        return view('viewUsuaris')->with('nomUsuari', "Usuari2: Fernanda");
    }

}



