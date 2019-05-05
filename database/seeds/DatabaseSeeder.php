<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            ArtistsTableSeeder::class,
            ConcertsTableSeeder::class,
            TagsTableSeeder::class,
            ArtistConcertTableSeeder::class,
            ArtistTagTableSeeder::class,
            OrdersTableSeeder::class,
            DatesTableSeeder::class,
            OrderLineTableSeeder::class,
            BasketsTableSeeder::class,
        ]);
    }
}
