<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.index');
});

// delete aliases to allow for anchor link deletion
Route::get('/genres/{genre}/delete/', 'GenreController@destroy')->name('genres.delete');
Route::get('/actors/{actor}/delete', 'ActorController@destroy')->name('actors.delete');
Route::get('/producers/{producer}/delete', 'ProducerController@destroy')->name('producers.delete');
Route::get('/films/{film}/delete/', 'GenreController@destroy')->name('films.delete');
Route::resources([
    'films' => 'FilmController',
    'actors' => 'ActorController',
    'producers' => 'ProducerController',
    'genres' => 'GenreController'
]);
// Route::resource('films', 'FilmController')->except('destroy');
// Route::resource('actors', 'ActorController')->except('destroy');
// Route::resource('producers', 'ProducerController')->except('destroy');
// Route::resource('genres', 'GenreController')->except('destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
