<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //
    protected $table = 'episodes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    public function movie(){
        return $this->belongsTo('App\Movie', 'movie_id');
    }

}
