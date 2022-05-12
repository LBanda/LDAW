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
        Schema::create('areacapacitacion_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId("areac_id")->constrained()->onDelete("cascade");
            $table->foreignId("events_id")->constrained()->onDelete("cascade");

            //Índice unique que garantice la integridad referencial N:N
            $table->unique(["areac_id","events_id"]);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areacapacitacion_events');
    }
};
