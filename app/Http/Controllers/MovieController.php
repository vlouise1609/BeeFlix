<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Episode;

class MovieController extends Controller
{
    public function detailView($id){
        $movie = Movie::find($id);

        $episodes = Episode::where('movie_id', '=', $id)
                    ->paginate(3);
        // return view('detail')->with['movie'->$movie];
        return view('detail')->with(['movie' => $movie, 'episodes'=> $episodes]);
    }

}
