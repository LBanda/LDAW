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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("siglas_evento", 20);
            $table->string("nombre_evento", 255);
            $table->string("descripcion", 255)->nullable();
            $table->integer("duracion");
            $table->integer("capacidad_evento");
            $table->decimal("costo",7,2);
            $table->string("ubicacion", 20);
            $table->foreign('areac_id')
                  ->references("id")
                  ->on('areacapacitacion')
                  ->onDelete("cascade");
            $table->foreign("id_category")
                  ->references('id')
                  ->on('categories')
                  ->onDelete("cascade");
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
        Schema::dropIfExists('events');
    }
};
