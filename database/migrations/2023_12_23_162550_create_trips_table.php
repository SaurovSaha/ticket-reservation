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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('transection_no')->unique();
            $table->date('date');
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('location_id_from');
            $table->unsignedBigInteger('location_id_to');
            $table->integer('total_seat');
            $table->timestamps();

            $table->foreign('bus_id')->references('id')->on('buses');
            $table->foreign('location_id_from')->references('id')->on('locations');
            $table->foreign('location_id_to')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
