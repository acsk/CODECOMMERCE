<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provas', function (Blueprint $table) {
            
            
            $table->increments('id');
            $table->string('prova_slug');
            
            $table->integer('banca_id')->unsigned();
            $table->foreign('banca_id')->references('id')->on('bancas');

            $table->integer('orgao_id')->unsigned();
            $table->foreign('orgao_id')->references('id')->on('orgaos');
            
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');

            $table->integer('nivel_id')->unsigned();
            $table->foreign('nivel_id')->references('id')->on('nivels');

            $table->integer('ano_id')->unsigned();
            $table->foreign('ano_id')->references('id')->on('anos');
           
            
            
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
        Schema::drop('provas');
    }
}
