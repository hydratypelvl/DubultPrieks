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
        $amount = 100;
        for($i=0; $i<=$amount; $i++):
            DB::table('anketas')
                ->insert([
                    'date' => $faker->date,
                    'name' => $faker->name,
                    'surname' => $faker->lastname,
                    'number' => $faker->numberBetween($min = 25000000, $max = 29000000),
                    'email' => $faker->unique()->safeEmail,
                    'carnumber' => $faker->emoji,
                    'ip' => $faker->numberBetween($min = 1111111111, $max = 999999999)
                ]);
        endfor;
    }
}
