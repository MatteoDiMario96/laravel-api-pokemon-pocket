<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attackData = [
            [
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '40',
            ],[
                'name' => 'Razor Leaf',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Mega Drain',
                'description' => '',
                'DMG' => '80',
            ],[
                'name' => 'Giant Bloom',
                'description' => '',
                'DMG' => '10',
            ],[
                'name' => 'Find a Friend',
                'description' => 'Put 1 random leaf pokemon from your deck into your hand.',
                'DMG' => '',
            ],[
                'name' => 'Bug Bite',
                'description' => '',
                'DMG' => '30',
            ],[
                'name' => 'Gust',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Sting',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Sharp Sting',
                'description' => '',
                'DMG' => '70',
            ],[
                'name' => 'Ram',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Drool',
                'description' => '',
                'DMG' => '40',
            ],[
                'name' => 'Soothing Scent',
                'description' => 'Your opponent\'s Active Pokemon is now Asleep.',
                'DMG' => '80',
            ],[
                'name' => 'Slash',
                'description' => '',
                'DMG' => '80',
            ],[
                'name' => 'Tackle',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Poison Powder',
                'description' => 'Your opponent\'s Active Pokemon is now poisoned',
                'DMG' => '30',
            ],[
                'name' => 'Seed Bomb',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Stomp',
                'description' => 'Flip a coin. If heads, this attack does 30 more damage',
                'DMG' => '30+',
            ],[
            ],[
                'name' => 'Stomp',
                'description' => 'Flip a coin. If heads, this attack does 30 more damage',
                'DMG' => '10+',
            ],[
                'name' => 'Tropical Swing',
                'description' => 'Flip a coin. If heads, this attack does 40 more damage',
                'DMG' => '40+',
            ],[
                'name' => 'Absorb',
                'description' => 'Heal 10 damage from this pokemon.',
                'DMG' => '40',
            ],[
                'name' => 'Double Horn',
                'description' => 'Flip 2 coins. This attack does 50 more damage for each heads',
                'DMG' => '50x',
            ],[
                'name' => 'Attach',
                'description' => '',
                'DMG' => '10',
            ],[
                'name' => 'Rolling Tackle',
                'description' => '',
                'DMG' => '40',
            ],[
                'name' => 'Blot',
                'description' => 'Heal 10 damage from this pokemon.',
                'DMG' => '10',
            ],[
                'name' => 'Leaf Supply',
                'description' => 'Take a Leaf Energy from your Energy Zone and attach it to 1 of your Benched Leaf Pokemon',
                'DMG' => '50',
            ],[
                'name' => 'Surprise Attack',
                'description' => 'Flip a coin. if tails, this attack does nothing',
                'DMG' => '40',
            ],[
                'name' => 'Growth Spurt',
                'description' => 'Take a Leaf Energy from your Energy Zone and attach it to this Pokemon',
                'DMG' => '',
            ],[
                'name' => 'Psychic',
                'description' => 'This attack does 20 more damage for each Energy attached to your opponent\'s Active Pokemon',
                'DMG' => '80+',
            ],[
                'name' => 'Powerful Bloom',
                'description' => 'Flip a coin for each Energy attached to this Pokemon. This Attack does 50 damage for each heads',
                'DMG' => '50x',
            ],[
                'name' => 'Solar Beam',
                'description' => '',
                'DMG' => '70',
            ],[
                'name' => 'Flickering Spores',
                'description' => 'Your opponent\'s Active Pokemon is now Asleep',
                'DMG' => '50',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '50',
            ],[
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '20',
            ],[
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Razor Leaf',
                'description' => '',
                'DMG' => '40',
            ],[
                'name' => 'Energy Whip',
                'description' => 'If this pokemon has at least 3 extra Leaf Energy attached, this attack does 70 more damage.',
                'DMG' => '20+',
            ],[
                'name' => 'Ember',
                'description' => 'Discard a Fire Energy from this Pokemon.',
                'DMG' => '30',
            ],[
                'name' => 'Fire Claws',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Fire Spin',
                'description' => 'Discard two Fire Energy from this Pokemon.',
                'DMG' => '150',
            ],[
                'name' => 'Slash',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Crimson Storm',
                'description' => 'Discard two Fire Energy from this Pokemon.',
                'DMG' => '60',
            ],[
                'name' => 'Tail Whip',
                'description' => 'Flip a coin. If heads, the Defending Pokemon can\'t attack during your opponent\'s next turn.',
                'DMG' => '',
            ],[
                'name' => 'Flamethrower',
                'description' => 'Discard a Fire Energy from this Pokemon ',
                'DMG' => '90',
            ],[
            ],[
                'name' => 'Flamethrower',
                'description' => 'Discard a Fire Energy from this Pokemon ',
                'DMG' => '110',
            ],[
                'name' => 'Bite',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Heat Tackle',
                'description' => '',
                'DMG' => '100',
            ],[
                'name' => 'Inferno Onrush',
                'description' => '',
                'DMG' => '120',
            ],[
                'name' => 'Flare',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Fire Mane',
                'description' => '',
                'DMG' => '40',
            ],[
                'name' => 'Magma Punch',
                'description' => '',
                'DMG' => '50',
            ],[
                'name' => 'Sky Attack',
                'description' => 'Flip a coin. If tails, this attack does nothing.',
                'DMG' => '130',
            ],[
                'name' => 'Inferno Dance',
                'description' => 'Flip 3 coins. Take an amount of Fire Energy from your Energy Zone equal the number of heads and attach it to your Benched Fire Pokemon in any way you like.',
                'DMG' => '',
            ],[
                'name' => 'Heat Blast',
                'description' => '',
                'DMG' => '70',
            ],[
                'name' => 'Combustion',
                'description' => '',
                'DMG' => '30',
            ],[
                'name' => 'Scratch',
                'description' => '',
                'DMG' => '20',
            ],[
                'name' => 'Gnaw',
                'description' => '',
                'DMG' => '10',
            ],[
                'name' => 'Fire Blast',
                'description' => 'Discard a Fire Energy from this Pokemon.',
                'DMG' => '130',
            ],[
            ],[
                'name' => 'Fire Blast',
                'description' => 'Discard 2 Fire Fire Energy from this Pokemon.',
                'DMG' => '80',
            ],[
                'name' => 'Rising Lunge',
                'description' => 'Flip a coin. If heads, this attack does 60 more damage.',
                'DMG' => '40+',
            ],[
                'name' => 'Volcanic Ash',
                'description' => 'Discard 2 Fire Energy from this Pokemon. This attack does 80 damage to 1 of your opponent\'s Pokemon.',
                'DMG' => '',
            ],[
                'name' => 'Venoshock',
                'description' => 'If your opponent\'s Active Pokemon is Poisoned, this attack does 40 more damage.',
                'DMG' => '10+',
            ],[
                'name' => 'Poisoned Claws',
                'description' => 'Your opponent\'s Active Pokemon is now poisoned',
                'DMG' => '30',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],[
                'name' => 'Vine Whip',
                'description' => '',
                'DMG' => '60',
            ],
        ];
    }
}
