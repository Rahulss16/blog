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
        $user = App\User::create([
        	'name'     => 'Rahul Singh Shekhawat',
        	'email'    => 'rahulsinghshekhawat16@gmail.com',
        	'password' => bcrypt('rahulss'),
            'admin'    => 1,
        ]);

        App\Profile::create([
            'user_id'  => $user->id,
            'avatar'   => 'uploads/avatars/me.jpeg',
            'about'    => 'Loreum ipsum dolor sit gih tedh, concdption saupkduj elit. Ashut niyan thsoo sijdh wewoupd.',
            'facebook' => 'facebook.com',
            'youtube'  => 'youtube.com',
        ]);
    }
}
