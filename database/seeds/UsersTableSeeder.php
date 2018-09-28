<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'username'      => 'cedric',
            'name'          => 'Cedric',
            'lastname'      => 'Fracassi',
            'email'         => 'cedric.fracassi@pbec.fr',
            'password'      => Hash::make('nifix'),
            'rights'        => 0,
        ));

        for ($i = 0; $i <= 15; $i++) {
	        DB::table('users')->insert(array(
                'username'  => 'test'.rand(0,15),
	        	'name'		=> 'Moo'.str_random(10),
	        	'lastname'	=> 'Roger'.str_random(10),
	        	'email'		=> 'moo@test'.str_random(10).'.com',
	        	'password'	=> Hash::make('test'),
	        	'rights'	=> rand(1,3),
	        ));
    	}
    }
}
