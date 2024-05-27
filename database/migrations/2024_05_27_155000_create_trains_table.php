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
            $table->string('Owner', 100);
            $table->string('Starting', 100);
            $table->string('Destination', 100);
            $table->dateTime('Departure time', $precision = 0);
            $table->dateTime('Arrival time', $precision = 0);
            $table->string('Train Code', 8);
            $table->unsignedTinyInteger('Wagons');
            $table->boolean('On time')->default(true);
            $table->boolean('Cancelled')->default(false);
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
