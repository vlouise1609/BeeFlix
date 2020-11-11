<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PageController@home');

Route::get('/home', 'PageController@home');

Route::get('/categories/{genre_id}', 'PageController@genreView');

Route::get('/detail/{id}', 'MovieController@detailView');

Route::get('/detail', function () {
    return view('detail');
});

//kl ada dua methodnya pake Route::match 
//kl mau semua method pake Route::any


