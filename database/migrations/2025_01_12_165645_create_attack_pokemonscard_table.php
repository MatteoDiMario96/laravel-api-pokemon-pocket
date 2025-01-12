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
        Schema::create('attack_pokemonscard', function (Blueprint $table) {
            // Dati tabella Attack
            $table->unsignedBigInteger('attack_id');
            $table->foreign('attack_id')->references('id')->on('attacks');

            // Dati tabella PokemonCard
            $table->unsignedBigInteger('pokemons_card_id');
            $table->foreign('pokemons_card_id')->references('id')->on('pokemonscards');


            $table->primary(['attack_id', 'pokemons_card_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attack_pokemonscard');
    }
};
