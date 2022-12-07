<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class QuestionOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_options')->insert([
            'question_id' => '1',
            'option1' => 'Distante.',
            'option2' => 'Acessível.',
            'option3' => 'Desconectado.',
            'option4' => 'Apresentado.',
            'correct' => 'Acessível.',
        ]);
        DB::table('question_options')->insert([
            'question_id' => '2',
            'option1' => 'Pois a conexão é ruim.',
            'option2' => 'Não conhecer a senha.',
            'option3' => 'Celular pode quebrar.',
            'option4' => 'Hackers podem ter acesso ao seu dispositivo.',
            'correct' => 'Hackers podem ter acesso ao seu dispositivo.',
        ]);
        DB::table('question_options')->insert([
            'question_id' => '3',
            'option1' => 'A tecnologia quer acabar com coisas grandes.',
            'option2' => 'A tecnologia vem para inovar as coisas existentes e otimizar tempo.',
            'option3' => 'A tecnologia irá sempre diminuir o tamanho dos objetos já criados.',
            'option4' => 'Todas as alternativas.',
            'correct' => 'A tecnologia vem para inovar as coisas existentes e otimizar tempo.',
        ]);
        DB::table('question_options')->insert([
            'question_id' => '4',
            'option1' => 'Desenvolvedor, Encarregado, Analista de dados.',
            'option2' => 'Desenvolvedor, Analista de big data, Especialista em segurança da informação.',
            'option3' => 'Desenvolvedor, estagiário, Segurança.',
            'option4' => 'Desenvolvedor, Gerente, Diretor.',
            'correct' => 'Desenvolvedor, Analista de big data, Especialista em segurança da informação.',
        ]);
        DB::table('question_options')->insert([
            'question_id' => '5',
            'option1' => 'Inovação e transparência.',
            'option2' => 'Inovação e segurança.',
            'option3' => 'Inovação e paixão.',
            'option4' => 'Inovação e publicidade.',
            'correct' => 'Inovação e segurança.',
        ]);
    }
}
