<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('id_usuario')->nullable();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('autorizacao')->nullable();
            $table->string('nivel')->nullable();
            $table->string('pergunta1')->nullable();
            $table->string('pergunta2')->nullable();
            $table->string('pergunta3')->nullable();
            $table->string('pergunta4')->nullable();
            $table->string('pergunta5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
};
