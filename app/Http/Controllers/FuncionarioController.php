<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastro(Request $request){
        return view("formulariocadastroFuncionario");
    }

    public function cadFuncionario(Request $request){
        $dadosValidos = $request->validate([
            'id' => 'string|required',
            'nome' => 'string|required',
            'funcao' => 'string|required',
        ]);
        
        Funcionario::create($dadosValidos);
        return Redirect::route('home');
    }
}


