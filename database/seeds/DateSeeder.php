<?php

use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
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
            DB::table('dates')
                ->insert([
                    'date' => $faker->city,
                ]);
        endfor;
    }
}
