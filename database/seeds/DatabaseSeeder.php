<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

				factory('Blog\User')->create(
				[
						'name' => 'alexandre',
						'email' => 'maycon.alex.rocha@hotmail.com',
						'password' => bcrypt('alex1304'),
						'remember_token' => str_random(10),
				]
			);

        // $this->call(UserTableSeeder::class);
				$this->call('TagTableSeeder');
        $this->call('PostsSeeder');


        Model::reguard();
    }
}
