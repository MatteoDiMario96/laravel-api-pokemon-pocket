<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    protected $fillable = [
        'name',
        'description',
        'DMG',
    ];

    // Relazione many to many con PokemonsCard.
    public function pokemonsCard(){
        return $this->belongsToMany(Pokemonscard::class);
    }
}
