<?php

use Illuminate\Database\Seeder;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog\Post::truncate();
        factory('Blog\Post',10)->create();
    }
}
