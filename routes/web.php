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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    $fumetti = config('comics');
    //dd($fumetti);
    return view('home', compact ('fumetti'));
})->name('home');

/* Route::get('/authors', function () {
    $fumetti = config('comics');
    //dd($fumetti);
    return view('authors', compact ('fumetti'));
})->name('authors'); */

/* Route::get('/', function () {
    $data = [
        'name' => 'DC Comics',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo a accusantium harum qui neque ab nobis accusamus enim alias.'
    ];
    return view('homepage', $data);
})->name('home'); */

Route::get('/characters', function () {
    return 'Characters page';
})->name('characters');

Route::get('/comics', function () {
    $fumetti = config('comics');

    return view('comics', compact('fumetti'));
})->name('comics');

Route::get('/movies', function () {
    return 'Movies page';
})->name('movies');

Route::get('/tv', function () {
    return 'Tv page';
})->name('tv');

Route::get('/games', function () {
    return 'Games page';
})->name('games');

Route::get('/collectibles', function () {
    return 'Collectibles page';
})->name('collectibles');

Route::get('/videos', function () {
    return 'Videos page';
})->name('videos');

Route::get('/fans', function () {
    return 'Fans page';
})->name('fans');

Route::get('/news', function () {
    return 'News page';
})->name('news');

Route::get('/shop', function () {
    return 'shop page';
})->name('shop');
