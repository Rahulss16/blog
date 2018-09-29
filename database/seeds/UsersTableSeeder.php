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
        App\User::create([
        	'name' => 'Rahul Singh Shekhawat',
        	'email' => 'rahulsinghshekhawat16@gmail.com',
        	'password' => bcrypt('rahulss')
        ]);
    }
}
