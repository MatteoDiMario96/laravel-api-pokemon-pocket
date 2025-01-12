<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $fillable = [
        'name',
        'IMG',
        'tier_list',
    ];

    // Relazione many to many con PokemonsCard.
    public function pokemonsCard(){
        return $this->belongsToMany(Pokemonscard::class);
    }
    // Relazione many to many con ToolsCard
    public function toolsCard(){
        return $this->belongsToMany(Toolscard::class);
    }
    // relazione many to many con TrainersCard.
    public function trainerscard(){
        return $this->belongsToMany(Trainerscard::class);
    }
}
