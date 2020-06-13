<?php

use Illuminate\Database\Seeder;

class AnketaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
            DB::table('anketas')
                ->insert([
                    'date' => $faker->date,
                    'name' => $faker->name,
                    'surname' => $faker->lastname,
                    'number' => $faker->numberBetween($min = 25000000, $max = 29000000),
                    'email' => $faker->unique()->safeEmail,
                    'carnumber' => $faker->emoji
                ]);
        endfor;
    }
}
