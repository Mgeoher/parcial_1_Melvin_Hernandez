<?php

namespace App\Http\Controllers;

class Controllerpaginas extends Controller

{
    function index(){
        return view('pagina_1');
    }
    public function pagina_2(){
        return view('pagina_2');
}
}
