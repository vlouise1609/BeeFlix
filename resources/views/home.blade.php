@extends('layout')
@section('title', 'Home Page')

@section('container')
    <div>
        @include('header')  
    </div>

    {{-- @yield('container-movies-genre') --}}

    @foreach ($genres as $genre)
    <div class="categories-container">
        <span class="categories-container-txt">{{$genre->genre_name}}</span>
        <div class="categories-container-1">
         
          @foreach ($movies as $movie) 
            @if ($genre->id ==  $movie->genre_id)
            <div class="card" style="width: 230px;" style="height: 10rem">
                <img src="../assets/{{$movie->movie_img}}" class="card-img-top" alt="{{$movie->movie_title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->movie_title}}</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <a href="/detail/{{$movie->id}}" class="btn btn-primary">More Info</a>
                </div>
            </div>

            @endif
          @endforeach
        </div>
    </div>
    @endforeach

@endsection