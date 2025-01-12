<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

        protected $fillable = [
            'name',
        ];


    // Relazione one to many con Pokemonscard. Author è la tabella primaria
    public function pokemonscard(){
        return $this->hasMany(Pokemonscard::class);
    }
    // Relazione one to many con Toolscard. Author è la tabella primaria
    public function toolscard(){
        return $this->hasMany(Toolscard::class);
    }
    // Relazione one to many con Trainerscard. Author è la tabella primaria
    public function trainerscard(){
        return $this->hasMany(Trainerscard::class);
    }
}
