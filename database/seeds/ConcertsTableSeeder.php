<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConcertsTableSeeder extends Seeder
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
            DB::table('concerts')->insert([ //,
                'name_concert' => $faker->unique()->name,
                'description_concert' => $faker->text($maxNbChars = 191),
                'img' => $faker->imageUrl(300, 300, 'nightlife'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'category_id' => $faker->numberBetween(1,5),
            ]);
        }

    }
}
