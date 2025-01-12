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
        Schema::create('toolscards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign("card_id")->references("id")->on("cards")->onDelete('cascade');
            $table->string('name', 20);
            $table->text('IMG');
            $table->string('description', 80);
            $table->string('effect', 200);
            $table->unsignedBigInteger('rarity_id');
            $table->foreign("rarity_id")->references("id")->on("rarities")->onDelete('cascade');
            $table->unsignedBigInteger('pack_id');
            $table->foreign("pack_id")->references("id")->on("packs")->onDelete('cascade');
            $table->unsignedBigInteger('author_id');
            $table->foreign("author_id")->references("id")->on("authors")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('toolscards', function (Blueprint $table) {
            $table->dropForeign(['card_id']);
            $table->dropForeign(['rarity_id']);
            $table->dropForeign(['pack_id']);
            $table->dropForeign(['author_id']);
        });

        Schema::dropIfExists('toolscards');
    }
};
