<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('prova_id')->unsigned();
            $table->foreign('prova_id')->references('id')->on('provas');
            
            
            $table->string('descricao');
            $table->integer('id_area');
            $table->integer('id_disciplina');
            $table->integer('id_assunto');
           
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
        Schema::drop('questaos');
    }
}
