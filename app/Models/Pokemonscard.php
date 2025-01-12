<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemonscard extends Model
    {
        use HasFactory;

        protected $fillable = [
            'card_id',
            'name',
            'HP',
            'IMG',
            'retreat',
            'element_id',
            'rarity_id',
            'pack_id',
            'author_id',
        ];

        // Relazione one to one con Card.
        public function Card(){
            return $this->belongsTo(Card::class, 'card_id', 'id');
        }
        // Relazione one to many con Element. Pokemonscard è la tabella secondaria
        public function element(){
            return $this->belongsTo(Element::class);
        }
        // Relazione one to many con Rarity. Pokemonscard è la tabella secondaria
        public function rarity(){
            return $this->belongsTo(Rarity::class);
        }
        // Relazione one to many con Pack. Pokemonscard è la tabella secondaria
        public function pack(){
            return $this->belongsTo(Pack::class);
        }
        // Relazione one to many con Author. Pokemonscard è la tabella secondaria
        public function author(){
            return $this->belongsTo(Author::class);
        }
        // Relazione many to many con Attack.
        public function attack(){
            return $this->belongsToMany(Attack::class);
        }
        // Relazione many to many con Deck.
        public function deck(){
            return $this->belongsToMany(Deck::class);
        }

}
