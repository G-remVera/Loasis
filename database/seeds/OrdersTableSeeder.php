<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('orders')->insert([ //,
                'payement_method' => $faker->creditCardType,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => $faker->numberBetween(1,10),
            ]);
        }
    }
}
