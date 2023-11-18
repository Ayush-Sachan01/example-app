<?php

use Illuminate\Support\Facades\Route;
use App\Models\Song;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loa ded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies/{veggieName}', function (String $veggieName) {
    return $veggieName;
})->whereIn('veggieName',['aaloo','baigan','bhindi','gobhi']);

Route::get('/veggies',function(){
    return view('veggies');
});

Route::get('/songs_static', function () {

    return 'songs_static';
});
Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});
