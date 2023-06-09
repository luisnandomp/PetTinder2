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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('raca', 155);
            $table->string('porte', 100);
            $table->integer('idade');
            $table->string('cor', 18);
            $table->string('personalidade', 255);
            $table->string('comorbidade', 255);
            $table->string('pet', 10);
            $table->string('genero', 15);
            $table->string('apelido', 50);
            $table->string('foto');
            $table->string('vacina', 3);
            $table->string('castracao', 8);
            $table->string('localidade', 100);
            $table->bigInteger('usuario_id')->unsigned();
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
        Schema::dropIfExists('animais');
    }
};
