<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
// use DB;

class PageController extends Controller
{
  
    public function home(){
        $listgenre = Genre::all();
        $listmovie = Movie::all();
        return view('home', ['genres'=>$listgenre, 'movies'=>$listmovie]);
    }

    public function genreView($genre_id){
        $movies = Movie::where('genre_id', '=', $genre_id)
                    ->get();
        $genre = Genre::find($genre_id);
        return view('categories')->with(['genre' => $genre, 'movies'=> $movies]);
        // return view('categories')->with(['movies' => $movies]);
    }

}
