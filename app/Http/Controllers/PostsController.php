<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Blog;

class PostsController extends Controller
{
    //
    
	public function index() {
		$posts =  Blog\Post::all();
		return view( 'posts.index',compact( 'posts' ) );
	}
	
	public function post( $id) {
		$post = Blog\Post::find( $id );
		$posts =  Blog\Post::all(['id','title']);
		return view( 'posts.post',compact( ['post','posts'] ) );
	}
}
