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

        $all = (new Question)->questionsEazy();

        return view('tema-facil', compact('all','on','two','tree','for'));
    }

    public function entrar_cadastrar () {

        return view('entrar-cadastrar');
    }

    public function perguntaFacil (Request $request) {

        $id = Auth::user()->id;

        $answers = new Answer;

        $answers->choice                = $request->choice;
        $answers->users_id              = $id;
        $answers->question_id           = $request->question_id;

        $answers->save();

        return back()->withInput();
    }
}
