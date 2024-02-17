<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastro(Request $request){
        return view("formulariocadastroFuncionario");
    }
}
