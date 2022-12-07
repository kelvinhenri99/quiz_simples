<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'id' => '1',
            'level' => 'facil',
            'title' => 'Qual o sinônimo de ONLINE?',
        ]);
        DB::table('questions')->insert([
            'id' => '2',
            'level' => 'facil',
            'title' => 'Por que devemos evitar o acesso a Wi-Fi público?',
        ]);
        DB::table('questions')->insert([
            'id' => '3',
            'level' => 'facil',
            'title' => 'Com o avanço da tecnologia em geral, as coisas tornam-se menores e com muito mais funções, como por exemplo um telefone fixo comparado a um celular. Por que isso ocorre?',
        ]);
        DB::table('questions')->insert([
            'id' => '4',
            'level' => 'facil',
            'title' => 'No século XXI, a demanda das buscas de empresas por profissionais da tecnologia aumentaram muito. Quais são os principais cargos de tecnologia atualmente (2022)?',
        ]);
        DB::table('questions')->insert([
            'id' => '5',
            'level' => 'facil',
            'title' => 'Qual a frase que melhor define a tecnologia?',
        ]);
    }
}
