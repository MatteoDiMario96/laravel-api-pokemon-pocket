<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
    {
        use HasFactory;

        protected $fillable = [
            'name',
        ];

        // Relazione one to one con Pokemoncard.
        public function pokemonsCard(){
            return $this->hasOne(Pokemonscard::class, 'card_id', 'id');
        }

        // Relazione one to one con Toolscard.
        public function toolsCard(){
            return $this->hasOne(Toolscard::class, 'card_id', 'id');
        }

        // Relazione one to one con Trainerscard.
        public function trainersCard(){
            return $this->hasOne(Trainerscard::class, 'card_id', 'id');
        }

}
