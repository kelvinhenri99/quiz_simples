<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function questionsEazy(){

        return $this->where('level', 'facil')
                    ->join('question_options', 'question_id', '=', 'questions.id')
                    ->select('questions.title','question_options.*')
                    ->get();
    }

    public function answer(){

        $id = Auth::user()->id;

        return $this->where('questions.level', 'facil')
        ->where('users.id', $id)
        ->join('question_options', 'question_options.question_id', '=', 'questions.id')
        ->join('answers', 'answers.question_id', '=', 'questions.id')
        ->join('users', 'users.id', '=', 'answers.users_id')
        ->select('questions.title','question_options.*','answers.*','questions.id as kelvin')
        ->get();
    }

    public function autenticator(){

        $id = Auth::user()->id;

        return $this->where('users_id', $id)
        ->from('answers')
        ->join('question_options', 'answers.question_id', '=', 'question_options.question_id')
        ->get();
    }
}
