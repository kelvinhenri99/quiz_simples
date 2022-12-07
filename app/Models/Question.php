<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Facades\Auth;

class Question extends Model
{
    public function questionsEazy(){

        return $this->where('level', 'facil')
                    ->join('question_options', 'question_id', '=', 'questions.id')
                    ->select('questions.title','question_options.*')
                    ->get();
    }
}
