<?php

use Illuminate\Database\Seeder;
use jokes\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 30) as $index) {
            Joke::create([
                'body' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'user_id' => $faker->numberBetween($min = 1, $max = 5)
            ]);
        }
    }
}
