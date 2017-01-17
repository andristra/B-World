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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
return view ('bee');
});
Route::get('post/{action}/{post_id?}',
function($action, $post_id = null) {
echo 'I want to ', $action , ' ';
if (!empty($post_id))
echo $post_id;
});