<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(array(
            // drama
            array(
                'genre_id' => '1', 
                'movie_title' => 'The World Of The Married', 
                'movie_img' => 'worldofmarried.jpg',
                'movie_description' => 'A story of a married couple whose betrayal 
                                        of one another leads to a whirlwind of revenge,
                                        grief, forgiveness and healing.', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '1', 
                'movie_title' => 'Something In The Rain', 
                'movie_img' => 'somethingintherain.jpg',
                'movie_description' => 'This Korean drama tells the story of an older woman who falls in love 
                                        with her best friend’s younger brother.', 
                'rating' => '5'
            ), 
            array(
                'genre_id' => '1', 
                'movie_title' => 'Descendants of The Sun', 
                'movie_img' => 'dots.jpg',
                'movie_description' => 'A love story develops between Captain Yoo Shi Jin, from South Korean 
                                        Special Forces and Doctor Kang Mo Yeon, who works as a Surgeon at Haesung 
                                        Hospital in Seoul.', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '1', 
                'movie_title' => 'Kingdom', 
                'movie_img' => 'kingdom.png',
                'movie_description' => 'Set during Joseon period, the first season depicts the story of Crown Prince Lee Chang 
                                        (Ju Ji-hoon), who stumbles across a life-threatening political conspiracy while investigating 
                                        the spread of a mysterious plague.', 
                'rating' => '5'
            ),

            //kids
            array(
                'genre_id' => '2', 
                'movie_title' => 'We Bare Bears', 
                'movie_img' => 'webarebears.jpg',
                'movie_description' => 'Three adoptive brother bears: Grizzly (often called Grizz), Panda (often called Pan-Pan), and Ice Bear 
                                        attempt to integrate with human society. ', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '2', 
                'movie_title' => 'Barbie: Life in the Dreamhouse', 
                'movie_img' => 'barbie.jpg',
                'movie_description' => 'The series centers on the life of Barbie, her friends, her siblings, her boyfriend, Ken and a number of pets', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '2', 
                'movie_title' => 'BoBoiBoy', 
                'movie_img' => 'boboboi.jpg',
                'movie_description' => 'A teenage boy has superpowers that is based on elementals. He has the ability
                                        to separate into three. With his friends, Ying, Hannah/Yaya, Gopal and Fang, they 
                                        form a team and fight to protect the Earth.', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '2', 
                'movie_title' => 'Dragons Race To The Edge', 
                'movie_img' => 'dragons.jpg',
                'movie_description' => 'The adventures of young dragon trainer Hiccup and his loyal dragon companion, Toothless. 
                                        Hiccup and his friends train their animals unique abilities.', 
                'rating' => '5'
            ), 

            //tvshow
            array(
                'genre_id' => '3', 
                'movie_title' => 'Emily In Paris', 
                'movie_img' => 'emilyinparis.jpg',
                'movie_description' => 'Chicago marketing executive Emily Cooper is hired to provide an American perspective 
                                        at a marketing firm in Paris.', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '3', 
                'movie_title' => 'Money Heist', 
                'movie_img' => 'moneyheist.png',
                'movie_description' => 'A criminal mastermind who goes by "The Professor" has a plan to pull off the biggest 
                                        heist in recorded history -- to print billions of euros in the Royal Mint of Spain.', 
                'rating' => '5'
            ), 
            array(
                'genre_id' => '3', 
                'movie_title' => 'Strangers Things', 
                'movie_img' => 'strangers.jpg',
                'movie_description' => 'Set in the 1980s in the fictional town of Hawkins, Indiana, focuses on the investigation into 
                                        the disappearance of a young boy amid supernatural events occurring around the town, including 
                                        the appearance of a girl with psychokinetic abilities.', 
                'rating' => '4'
            ), 
            array(
                'genre_id' => '3', 
                'movie_title' => 'Lucifer', 
                'movie_img' => 'lucifer.jpg',
                'movie_description' => 'Lucifer, a demon, returns from hell to reside in Los Angeles and runs a club. 
                                        He soon gets involved with the local police and assists them in solving tricky criminal cases.', 
                'rating' => '5'
            ), 

            // tambahan

            array(
                'genre_id' => '1', 
                'movie_title' => 'The School Nurse Files', 
                'movie_img' => 'schoolnurse.jpg',
                'movie_description' => 'Ahn Eun Young, a school nurse who has powers that allow her to chase ghosts, is appointed to a 
                                        new high school where mysterious incidents take place', 
                'rating' => '4'
            ), 

            array(
                'genre_id' => '2', 
                'movie_title' => 'Dora The Explorer', 
                'movie_img' => 'dora.jpg',
                'movie_description' => 'Dora, a teenage explorer, leads her friends on an adventure to save her parents and 
                                        solve the mystery behind a lost city of gold.', 
                'rating' => '3'
            ), 

            array(
                'genre_id' => '3', 
                'movie_title' => 'Chilling Adventures of Sabrina', 
                'movie_img' => 'sabrina.jpg',
                'movie_description' => 'As her 16th birthday nears, Sabrina must choose between the witch world of her family and the human world of her friends. 
                                        Based on the Archie comic.', 
                'rating' => '4'
            ),
            
            


        ));
    }
}

// {{asset([lokasi]/$image)}}