<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BasketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            DB::table('baskets')->insert([ //,
                'quantity' => $faker->randomNumber(1),
                'date_id' => $faker->numberBetween(1,5),
                'user_id' => $faker->numberBetween(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
