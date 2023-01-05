<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
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

        $all = (new Question)->questionsEasy();

        $answers = (new Question)->answer();

        $auth = (new Question)->autenticatorEasy();

        return view('tema-facil', compact('all','answers','on','two','tree','for','auth'));
    }

    public function entrar_cadastrar () {

        return view('entrar-cadastrar');
    }

    public function perguntaFacil (Request $request) {

        $id = Auth::user()->id;

        $answers = new Answer;

        $answers->choice1       = $request->choice1;
        $answers->choice2       = $request->choice2;
        $answers->choice3       = $request->choice3;
        $answers->choice4       = $request->choice4;
        $answers->choice5       = $request->choice5;
        $answers->users_id      = $id;
        $answers->level         = '1';

        $answers->save();

        return back()->withInput()->with('success', 'Resposta salva com sucesso!');
    }
}
