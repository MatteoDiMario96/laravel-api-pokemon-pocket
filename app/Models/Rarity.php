<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

        protected $fillable = [
            'name',
            'IMG',
        ];

    // Relazione one to many con Pokemonscard. Rarity è la tabella primaria
    public function pokemonscard(){
        return $this->hasMany(Pokemonscard::class);
    }
    // Relazione one to many con Pokemonscard. Rarity è la tabella primaria
    public function toolscard(){
        return $this->hasMany(Toolscard::class);
    }
    // Relazione one to many con Pokemonscard. Rarity è la tabella primaria
    public function trainerscard(){
        return $this->hasMany(Trainerscard::class);
    }
}
