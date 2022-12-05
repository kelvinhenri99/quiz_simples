<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function welcome () {

        return view('welcome');
    }

    public function tema_facil () {

        return view('tema-facil');
    }

    public function entrar_cadastrar () {

        return view('entrar-cadastrar');
    }
}
