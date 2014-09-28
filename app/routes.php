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

//Route::get('/user/{id?}', 'HomeController@showUser');

Route::get('/users', function()
{
    $users = User::all();
    
    return View::make('users')->with('users', $users);
});

Route::get('login', function() {
    return "Login page";
});

Route::get('/post', 'PostController@show');
Route::get('/post/listing', array('uses' =>'PostController@listing', 'as' => 'get.post.listing')); 
Route::get('/post/{id}', array('uses' => 'PostController@single', 'as' => 'get.post.single'))->where('id', '[1-9][0-9]*');
Route::post('/post/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.single'));
Route::get('/post/insert', array('uses' => 'PostController@insert', 'as' => 'get.post.insert'));

Route::resource('user', 'UserController');
// Route::resource('user', 'UserController', array('except' => array('show', 'edit')));
//Route::resource('user', 'UserController', array('only' => array('show', 'edit')));