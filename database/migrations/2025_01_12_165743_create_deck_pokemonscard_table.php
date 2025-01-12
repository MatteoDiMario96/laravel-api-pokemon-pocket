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
        Schema::create('deck_pokemonscard', function (Blueprint $table) {
            // Dati tabella Deck
            $table->unsignedBigInteger('deck_id');
            $table->foreign('deck_id')->references('id')->on('decks');

            // Dati tabella PokemonCard
            $table->unsignedBigInteger('pokemons_card_id');
            $table->foreign('pokemons_card_id')->references('id')->on('pokemonscards');


            $table->primary(['deck_id', 'pokemons_card_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deck_pokemonscard');
    }
};
