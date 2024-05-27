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
            $table->string('Azienda', 100);
            $table->string('Stazione Partenza', 100);
            $table->string('Stazione Destinazione', 100);
            $table->dateTime('Orario Partenza', $precision = 0);
            $table->dateTime('Orario Arrivo', $precision = 0);
            $table->string('Codice Treno', 8);
            $table->unsignedTinyInteger('Numero Carrozze');
            $table->boolean('In Orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
