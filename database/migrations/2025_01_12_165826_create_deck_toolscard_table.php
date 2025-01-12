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
        Schema::create('deck_toolscard', function (Blueprint $table) {
            $table->unsignedBigInteger('deck_id');
            $table->foreign('deck_id')->references('id')->on('decks');

            // Dati tabella PokemonCard
            $table->unsignedBigInteger('tools_card_id');
            $table->foreign('tools_card_id')->references('id')->on('toolscards');


            $table->primary(['deck_id', 'tools_card_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deck_toolscard');
    }
};
