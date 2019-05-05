<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderLineTableSeeder extends Seeder
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
            DB::table('order_line')->insert([ //,
                'quantity' => $faker->randomNumber(1),
                'price' => $faker->randomNumber(2),
                'date_id' => $faker->numberBetween(1,10),
                'order_id' => $faker->numberBetween(1,10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
