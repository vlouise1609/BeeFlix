@extends('layout')
@section('title', 'Home Page')

@section('container')
    <div>
        @include('header')  
    </div>

    <div class="categories-container">
        <span class="categories-container-txt">{{$genre->genre_name}}</span>
        <div class="categories-container-1">
            @foreach ($movies as $movie)
            <div class="card" style="width: 230px;" style="height: 10rem">
                <img src="../assets/{{$movie->movie_img}}" class="card-img-top" alt="{{$movie->movie_title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->movie_title}}</h5>
                  <a href="/detail/{{$movie->id}}" class="btn btn-primary">More Info</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   
@endsection