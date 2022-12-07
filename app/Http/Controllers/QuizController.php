<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function welcome () {

        return view('welcome');
    }

    public function tema_facil () {

        $on = 1;
        $two = 2;
        $tree = 3;
        $for = 4;

        $all = (new Question)->questionsEazy();

        return view('tema-facil', compact('all','on','two','tree','for'));
    }

    public function entrar_cadastrar () {

        return view('entrar-cadastrar');
    }

    public function perguntaFacil (Request $request) {

        $id = Auth::user()->id;

        $resposta = new Respostas;
        
        $resposta->id                   = $id;
        $resposta->id_usuario           = $id;
        $resposta->autorizacao          = $request->autorizacao;
        $resposta->nivel                = 'FACIL';
        $resposta->pergunta1            = $request->pergunta1;
        $resposta->pergunta2            = $request->pergunta2;
        $resposta->pergunta3            = $request->pergunta3;
        $resposta->pergunta4            = $request->pergunta4;
        $resposta->pergunta5            = $request->pergunta5;

        $resposta->save();

        return back()->withInput();
    }
}
