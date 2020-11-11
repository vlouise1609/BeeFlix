<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;

class EpisodeController extends Controller
{
    public function index(){
        $episodes = Episode::paginate(3);
        return view('detail', compact(episodes));
    }
}
