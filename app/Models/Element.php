<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

        protected $fillable = [
            'name',
            'IMG',
        ];

        // Relazione one to many con Pokemonscard. Element è la tabella primaria
        public function pokemonscard(){
            return $this->hasMany(Pokemonscard::class);
        }
}
