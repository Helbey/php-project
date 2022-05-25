<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;

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
    return view('welcome');
});
Route::get('/movies', function () {
    return view('movies',[
        'heading' => 'Movies',
        'movies' => Movie::all()
    ]);
});
Route::get('/movie/{id}', function ($id) {
    return view('movie',[
        'movie' => movie::find($id)
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'],'verified')->name('dashboard');

require __DIR__.'/auth.php';

