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
    $name = Route::currentRouteName();
    //dd($name);
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
    $name = Route::currentRouteName();
    //dd($name);
    return 'Characters page';
})->name('characters');

Route::get('/comics', function () {
    $name = Route::currentRouteName();
    //dd($name);
    $fumetti = config('comics');

    return view('fumetti.index', compact('fumetti'));
})->name('fumetti.index');

Route::get('/comics/{id}', function ($id) {
    $fumetti = config('comics');
    /* dd(count($fumetti)); */
    if($id >= 0 && is_numeric($id) && $id < count($fumetti)) {
        //dd($id);
        $fumect = $fumetti[$id];
    return view('fumetti.show', compact('fumect'));
    } else {
        abort(404);
    }
})->name('fumetti.show');

Route::get('/movies', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'Movies page';
})->name('movies');

Route::get('/tv', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'Tv page';
})->name('tv');

Route::get('/games', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'Games page';
})->name('games');

Route::get('/collectibles', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'Collectibles page';
})->name('collectibles');

Route::get('/videos', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'Videos page';
})->name('videos');

Route::get('/fans', function () {
    return 'Fans page';
    $name = Route::currentRouteName();
    //dd($name);
})->name('fans');

Route::get('/news', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'News page';
})->name('news');

Route::get('/shop', function () {
    $name = Route::currentRouteName();
    //dd($name);
    return 'shop page';
})->name('shop');
