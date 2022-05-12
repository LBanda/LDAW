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
        Schema::create('categories_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            $table->foreignId("event_id")->constrained()->onDelete("cascade");
            //$table->timestamps();

            //Índice unique que garantice la integridad referencial N:N
            $table->unique(["category_id","event_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_events');
    }
};
