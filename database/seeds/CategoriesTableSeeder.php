<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('categories')->insert([ //,
                'name' => $faker->unique()->name,
                'slug' => $faker->slug(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
