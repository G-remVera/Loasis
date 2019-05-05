<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        $faker->addProvider(new Faker\Provider\Youtube($faker));

        for ($i = 0; $i < 10; $i++) {
            DB::table('artists')->insert([ //,
                'name' => $faker->unique()->name,
                'biography' => $faker->text($maxNbChars = 191),
                'logo' => $faker->imageUrl(300, 300, 'people'),
                'instagram' => $faker->url(),
                'facebook' => $faker->url(),
                'youtube' => $faker->youtubeUri(),
                'bandcamp' => $faker->url(),
                'siteweb' => $faker->url(),
                'category_id' => $faker->numberBetween(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
