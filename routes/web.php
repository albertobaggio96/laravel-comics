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
    $dcData = config("comics");
    return view('home', compact("dcData") );
});

Route::get('/action-movie', function () {
    $dcData = config("comics");
    return view('info', compact("dcData") );
})->name("info-card");