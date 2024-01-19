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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('passengers');
            $table->date('year'); //(Y-m-d) like (2019-12-31)
            $table->unsignedBigInteger('train_type_id'); //creo el campo pa la clave foranea
            $table->foreign('train_type_id')->references('id')->on('train_types')->onDelete("cascade"); //hago referencia a la clave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
