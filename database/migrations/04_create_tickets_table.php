<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // (Y-m-d) like (2019-12-31)
            $table->integer('price');
            $table->unsignedBigInteger('train_id'); //creo el campo pa la clave foranea
            $table->foreign('train_id')->references('id')->on('trains')->onDelete("cascade");//hago referencia a la clave foranea
            $table->unsignedBigInteger('ticket_type_id'); //creo el campo pa la clave foranea
            $table->foreign('ticket_type_id')->references('id')->on('ticket_types')->onDelete("cascade"); //hago referencia a la clave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
