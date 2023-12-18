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
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->binary('portada');
            $table->string('pregunta');
        });
        
          $sql = 'alter table pregunta change portada portada longblob';
          DB::statement($sql);
    }


    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
};
