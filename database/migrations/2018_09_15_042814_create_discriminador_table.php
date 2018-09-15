<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscriminadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discriminadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');            
            $table->string('prioridade');
            $table->boolean('validacao');
            $table->unsignedInteger('fluxo_id');
            $table->foreign('fluxo_id')->references('id')->on('fluxos');
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
        Schema::dropIfExists('discriminador');
    }
}
