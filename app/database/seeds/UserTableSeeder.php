<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
    	$group = Sentry::createGroup(array(
        	'name'        => 'Moderator',
        	'permissions' => array(
            	'admin' => 1,
        	),
    	));

    	$user = Sentry::createUser(array(
        	'email'     => 'limit@charge.com',
      	 	'password'  => 'limit',
        	'activated' => true,
    	));

    	$user->addGroup($group);
    }
}

