<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->date('data_nascimento');
            $table->char('genero', 1);

            //indicar ao aluno a que turma pertence(criando chaves estrangeiras)
            $table->unsignedBigInteger('turma_id');//coluna que guarda referencia da chave estrangeira
            //criando a chave estrangeira
            $table->foreign('turma_id')->references('id')->on('turmas');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
