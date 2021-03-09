<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semanas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cronograma_id');
            $table->text('conteudos');
            $table->text('materias');
            $table->timestamps();
            $table->foreign('cronograma_id')->references('id')->on('cronogramas')->onDelete('CASCADE');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semanas');
    }
}
