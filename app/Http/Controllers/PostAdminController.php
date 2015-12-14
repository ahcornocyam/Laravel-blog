<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Blog\Post;
use Blog\User;
use Blog\Tag;
use Blog\Http\Requests\PostRequest;

class PostAdminController extends Controller
{

		private $post;

		public function __construct( Post $post ){
				$this->post = $post;
		}
		public function auth(){
			$user = User::find(1);
			Auth::login($user);
		}
		public function index(){
			$posts 		= $this->post->paginate(5);

			return view( 'admin.post.index', compact( 'posts' ) );
		}

		public function create(){
			return view( 'admin.post.create' );
		}

		public function edit( $id ){
			$post = $this->post->find( $id );
			return view( 'admin.post.edit',compact('post') );
		}

		public function update( PostRequest $request, $id )
		{
			$this->post->find( $id )->update( $request->all() );
			$post = $this->post->find( $id );
			$post->tags()->sync( $this->getTagsIds( $request->tags ) );
			return redirect()->route( 'admin' );
		}

		public function destroy( $id ){
			$this->post->find( $id )->delete();
			return redirect()->route( 'admin' );
		}

		public function store( PostRequest $request ){
			$post = $this->post->create( $request->all() );
			$post->tags()->sync( $this->getTagsIds( $request->tags ) );

			return redirect()->route( 'admin' );
		}

		private function getTagsIds( $tags ){
			$tagList 			= array_filter( array_map( 'trim', explode( ',', $tags ) ) );
			$tagsID 		= [];
			foreach ( $tagList as $tagName ) {
				# code...
				$tagsID[] = Tag::firstOrCreate([ 'name'=> $tagName ])->id;
			}
			return $tagsID;
		}
}
