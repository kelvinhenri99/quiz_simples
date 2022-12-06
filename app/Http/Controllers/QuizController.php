<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Respostas;

class QuizController extends Controller
{
    public function welcome () {

        return view('welcome');
    }

    public function tema_facil () {

        $id = Auth::user()->id;

        $facil = DB::select('select *, date_format(created_at, "%d/%m/%Y") as data from respostas where id = ?', [$id]);
        $pontos = DB::select('select count(*) as total from quiz_simples.respostas where pergunta1="resposta2" union all select count(*) as total from quiz_simples.respostas where pergunta2="resposta4" union all select count(*) as total from quiz_simples.respostas where pergunta3="resposta2" union all select count(*) as total from quiz_simples.respostas where pergunta4="resposta2" union all select count(*) as total from quiz_simples.respostas where pergunta5="resposta2"');

        return view('tema-facil', compact('facil','id','pontos'));
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
