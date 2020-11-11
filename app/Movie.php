<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'movies';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function genreList(){
        return $this->belongsTo('App\Genre', 'genre_id');
    }

    public function episodesList(){
        return $this->hasMany('App\Episode', 'movie_id', 'id');
    }



}
