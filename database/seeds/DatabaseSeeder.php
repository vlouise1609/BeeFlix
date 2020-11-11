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
        // $this->call(UserSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(EpisodeDramaTableSeeder::class);
        $this->call(EpisodeKidsTableSeeder::class);
        $this->call(EpisodeTVShowTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
    }
}
