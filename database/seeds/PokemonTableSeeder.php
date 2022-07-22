<?php

use App\Models\Pokemon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PokemonTableSeeder extends Seeder
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
            $pokemon->weight = rand(1, 100);
            $pokemon->height = rand(1, 100);
            $pokemon->color= $faker->colorName();
            $pokemon->type = $faker->name();

            $pokemon->save();
        }
    }
}
