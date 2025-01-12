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
        Schema::create('deck_trainerscard', function (Blueprint $table) {
            $table->unsignedBigInteger('deck_id');
            $table->foreign('deck_id')->references('id')->on('decks');

            // Dati tabella PokemonCard
            $table->unsignedBigInteger('trainers_card_id');
            $table->foreign('trainers_card_id')->references('id')->on('trainerscards');


            $table->primary(['deck_id', 'trainers_card_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deck_trainerscard');
    }
};
