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
        Schema::create('historial', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idpregunta');
            $table->foreignId('idrespuesta');
            $table->string('usuario');
            $table->boolean('escorrecta');
            
            $table->foreign('idpregunta')->references('id')->on('pregunta')->onDelete('CASCADE');;
            $table->foreign('idrespuesta')->references('id')->on('respuesta')->onDelete('CASCADE');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial');
    }
};
