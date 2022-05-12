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
        Schema::create('participants__events', function (Blueprint $table) {
            $table->id();
            $table->foreignId("participant_id")->constrained()->onDelete("cascade");
            $table->foreignId("event_id")->constrained()->onDelete("cascade");
            //$table->timestamps();

            //Índice unique que garantice la integridad referencial N:N
            $table->unique(["participant_id","events_id"]);
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
        Schema::dropIfExists('participants__events');
    }
};
