<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 200);
            $table->timestamps();//esses campos sao o created at and update at
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
