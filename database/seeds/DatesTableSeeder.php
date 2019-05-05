<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('dates')->insert([ //,
                'date' => $faker->dateTime(),
                'price' => $faker->randomNumber(2),
                'concert_id' => $faker->numberBetween(1,5),
            ]);
        }
    }
}
