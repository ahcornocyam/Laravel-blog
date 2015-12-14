<?php

use Illuminate\Database\Seeder;
use Blog\Tag;
use Blog\Post;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        factory( 'Blog\Post',10 )->create();
				$lastTag = count( Tag::all() )-1;

				$posts  = Post::all();
				foreach ( $posts as $post ) {
					# code...
					$rand = rand( 0,5 );
					for ( $i=1; $i < $rand; $i++ ) {
						# code...
						$tag = Tag::find( rand( 0 ,$lastTag ) );
						$post->tags()->attach( $tag );
					}
				}
    }
}
