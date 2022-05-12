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
        Schema::create('participants', function (Blueprint $table) {
            $table->id("participant_id");
            $table ->string("nombre",20);
            $table -> string("apellido_paterno", 20);
            $table -> string("apellido_materna", 20);
            $table -> string("empresa", 20) ;
            $table -> integer("edad");
            $table -> string("estado", 25);
            $table->string('telefono', 15);
            $table -> string("email", 40)->unique();
            $table->foreignId("event_id");

            //Configuración explícita de llaves foráneas
            $table -> foreign('event_id')
                   ->references('id')
                   ->on('events')
                   -> onDelete("cascade");
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
        Schema::dropIfExists('participants');
    }
};
