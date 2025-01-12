<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainerscard extends Model
{
    use HasFactory;

        protected $fillable = [
            'card_id',
            'name',
            'IMG',
            'description',
            'effect',
            'rarity_id',
            'pack_id',
            'author_id',
        ];

    // Relazione one to one con Card.
    public function Card(){
        return $this->belongsTo(Card::class, 'card_id', 'id');
    }
    // Relazione one to many con Rarity. Trainerscard è la tabella secondaria
    public function rarity(){
        return $this->belongsTo(Rarity::class);
    }
    // Relazione one to many con Pack. Trainerscard è la tabella secondaria
    public function pack(){
        return $this->belongsTo(Pack::class);
    }
    // Relazione one to many con Author. Trainerscard è la tabella secondaria
    public function author(){
        return $this->belongsTo(Author::class);
    }
    // Relazione many to many con Deck.
    public function deck(){
        return $this->belongsToMany(Deck::class);
    }
}
