<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('genres')->insert(array(
           array(
               'genre_name' => 'Drama'
           ), 
           array(
               'genre_name' => 'Kids'
           ), 
           array(
               'genre_name' => 'TV Show'
           )
       ));
    }
}
