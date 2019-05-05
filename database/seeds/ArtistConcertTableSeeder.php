<?php

use Illuminate\Database\Seeder;

class ArtistConcertTableSeeder extends Seeder
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
            DB::table('artist_concert')->insert([ //,
                'artist_id' => $faker->numberBetween(1,5),
                'concert_id' => $faker->numberBetween(1,10),
            ]);
        }
    }
}
