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
Route::controllers(
		[
			'auth'				=> 'Auth\AuthController',
			'password'		=> 'Auth\PasswordController',
		]
);
Route::group( [ 'prefix'=>'/','where'=>[ 'id'=>'[0-9]+' ] ],function(){
	get( '/',[ 'as'=> 'blog', 'uses'=>'PostsController@index' ] );
	get( '/{id?}/post',[ 'as'=> 'blog.post', 'uses'=>'PostsController@post' ] );
} );
Route::group( [ 'prefix' => 'admin','middleware'=>'auth', 'where' => ['id' => '[0-9]+'] ], function(){
	get('/', ['as' => 'admin', 'uses' => 'PostAdminController@index'] );
	get( '/posts/novo', [ 'as'=> 'admin.create', 'uses' => 'PostAdminController@create' ] );
	post( '/posts/store', ['as' =>'admin.store', 'uses'=> 'PostAdminController@store'] );
	get('/posts/edit/{id?}', ['as' => 'admin.edit', 'uses'=> 'PostAdminController@edit']);
	put( '/update/{id?}', ['as'=>'admin.update','uses'=> 'PostAdminController@update'] );
	get( '/delete/{id?}', ['as'=>'admin.delete','uses'=> 'PostAdminController@destroy'] );
} );
