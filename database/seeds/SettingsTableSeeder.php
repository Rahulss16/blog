<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
        	'site_name' => 'Spread-Out',
        	'address'   => 'Delhi, India',
        	'contact_number' => '+91 9460004026',
        	'contact_email' => 'info@spreadout.in'
        ]);
    }
}
