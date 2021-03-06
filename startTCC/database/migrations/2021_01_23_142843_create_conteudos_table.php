<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->id();
            $table->text('conteudosExatas');
            $table->text('conteudosHumanas');
            $table->text('conteudosBiologicas');
            $table->text('conteudosTodas');
            $table->text('materiaExatas');
            $table->text('materiaHumanas');
            $table->text('materiaBiologicas');
            $table->text('materiaTodas');
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
        Schema::dropIfExists('conteudos');
    }
}
