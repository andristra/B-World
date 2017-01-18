<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

//Game selection page
Route::get('/', 'GamCtrl@root');

Route::get('/game', 'GamCtrl@index');
//Tournament listing
Route::get('/tournament', 'TurCtrl@index');

 //Admin insert game page
Route::get('/yourinput','inputGame@index');
Route::post('/yourinput','inputGame@input');


//Voting page
 Route::get('/vote','VoteCtrl@index');
 Route::post('/vote','VoteCtrl@input');
 
//Renting page
 Route::get('/rent','RentCtrl@index');
 Route::post('/rent','RentCtrl@input');
 
 //Purchase page
 Route::get('/purchase','PurCtrl@index');
 Route::post('/purchase','PurCtrl@input');
 //Add tournament
 Route::get('/turn','MKTRCTRL@index');
 Route::post('/turn','MKTRCTRL@input');
 
 Route::get('/admin','adctrl@index');
 
Auth::routes();

Route::get('/home', 'HomeController@index');
