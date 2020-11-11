<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //snake case dan plural name
    protected $table = 'genres';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function movie(){
        return $this->hasOne('App\Movie', 'genre_id', 'id');
    }


}
