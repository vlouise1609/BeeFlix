@extends('layout')
@section('title', 'Detail Page')

@section('container')
    <div>
        @include('header')  
    </div>

    {{-- @foreach ($detailMovie as $movie) --}}
    <div class="card-justify">
      <div class="card mb-3">
        <img src="../assets/{{$movie->movie_img}}" class="card-img-top-1" alt="{{$movie->movie_title}}">
        <div class="card-body">
          <h5 class="card-title-detail">{{$movie->movie_title}}</h5> 
          <div class="rating-card">
            <h6 class="card-text-1">Rating :</h6>
            <div class="container-star">
              @for ($i = 0; $i < $movie->rating; $i++)
                <img src="../assets/star.png" class="img-star" alt="star">
              @endfor
            </div>
          </div>
          <p class="card-text">{{$movie->movie_description}}</p>
          <div class="categories-detail-txt">
            <span class="card-text-2">Kategori : </span>
            <a href="/categories/{{$movie->genreList->id}}" class="genre-text">{{$movie->genreList->genre_name}}</a>
          </div>
        </div>
      </div>
    

    {{-- episode --}}
    <div style="width: 45%" style="margin-right: 10px">
      <div>
        <span class="episode-txt">Episode List</span>
      </div>

      <table class="table table-hover">
        <thead class="thead-dark-1">
          <tr>
            <th scope="col" style="font-size: 20px">Episode</th>
            <th scope="col" style="font-size: 20px">Title</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        @foreach ($episodes as $episode)
        <tbody>
          <tr>
            <th scope="row" style="font-size: 20px">{{$episode->episode_number}}</th>
            <td colspan="3" style="font-size: 20px">{{$episode->episode_title}}</td>
          </tr>
        </tbody>
        @endforeach
        

      </table>
      {{$episodes->links()}}
    </div>

@endsection