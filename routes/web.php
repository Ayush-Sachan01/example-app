<?php

use Illuminate\Support\Facades\Route;
use Practicals\song;


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

Route::get('/songs', function () {
    $song1=new Song();
    $song1->setTitle("With You");
    $song1->setArtist("AP Dhillon");

    $song2=new Song();
    $song2->setTitle("Lucky You");
    $song2->setArtist("Eminem");

    $song3=new Song();
    $song3->setTitle("Space Lion");
    $song3->setArtist("Seatbelts");
    return view('songs',['songs'=> [$song1,$song2,$song3]]);
});
