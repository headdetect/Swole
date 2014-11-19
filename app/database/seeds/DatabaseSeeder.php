<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
    	Eloquent::unguard();
        User::create(array(
        	'username' => 'admin',
        	'password' => Hash::make('password')
        ));

        
    }

}
