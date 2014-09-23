<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
 	return View::make('hello');
});

Route::get('/user/{id?}', 'HomeController@showUser');

Route::get('/users', function()
{
    $users = User::all();
    
    return View::make('users')->with('users', $users);
});

Route::get('/post', 'PostController@show');
Route::get('/post/listing', array('uses' =>'PostController@listing', 'as' => 'get.post.listing'));
Route::get('/post/{id}', array('uses' => 'PostController@single', 'as' => 'get.post.single'))->where('id', '[1-9][0-9]*');
Route::post('/post/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.single'));
