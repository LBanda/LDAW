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
        Schema::create('areacapacitacion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombre", 20);
            $table->text("descripcion", 100);
            $table->string("localización", 100);
            $table->foreignId("user_id");

            //Configuración explícita de llaves foráneas
            $table->foreign("user_id")
                  ->references('id')
                  ->on('users')
                  ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areacapacitacion');
    }
};
