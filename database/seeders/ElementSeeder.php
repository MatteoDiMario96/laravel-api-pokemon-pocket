<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elementsData = [
            [
                'name' => 'Colorless',
                'IMG' => 'Element_Colorless.jpg',
            ],[
                'name' => 'Dark',
                'IMG' => 'Element_Dark.jpg',
            ],[
                'name' => 'Dragon',
                'IMG' => 'Element_Dragon.png',
            ],[
                'name' => 'Electric',
                'IMG' => 'Element_Electric.png',
            ],[
                'name' => 'Fighting',
                'IMG' => 'Element_Fighting.png',
            ],[
                'name' => 'Fire',
                'IMG' => 'Element_Fire.jpg',
            ],[
                'name' => 'Grass',
                'IMG' => 'Element_Grass.png',
            ],[
                'name' => 'Psychic',
                'IMG' => 'Element_Psychic.webp',
            ],[
                'name' => 'Steel',
                'IMG' => 'Element_Steel.png',
            ],[
                'name' => 'Water',
                'IMG' => 'Element_Water.png',
            ],
        ];

        foreach ($elementsData as $elementData ) {
            Element::create($elementData);
        }
    }
}
