<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_name' => 'Logo',
            'site_email' => 'logo@email.com',
            'site_phone' => '+2348083369493',
            'site_address' => '23 Location, Location, Location State',
            'keywords' => 'ecommerce, best website in town',
            'description' => 'Welcome to the best Ecommerce in the world'
        ]);
    }
}
