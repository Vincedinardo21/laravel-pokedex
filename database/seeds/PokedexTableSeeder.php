<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PokedexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 151; $i++){
            $pokemon = new Pokemon();
            $pokemon->name = $faker->name();
            $pokemon->description = $faker->text();
            $pokemon->weight = $faker->randomFloat();
            $pokemon->height = $faker->randomFloat();
            $pokemon->color= $faker->colorName();
            $pokemon->type = $faker->name();
        }
    }
}
