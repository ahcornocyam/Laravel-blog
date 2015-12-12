<?php

use Blog\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group( [ 'prefix'=>'blog','where'=>[ 'id'=>'[0-9]+' ] ],function(){
	get( '/',[ 'as'=> 'blog', 'uses'=>'PostsController@index' ] );
	get( '/{id?}/post',[ 'as'=> 'blog.post', 'uses'=>'PostsController@post' ] );
} );