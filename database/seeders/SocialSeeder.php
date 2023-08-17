<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://facebook.com',
            'tiktok' => 'https://facebook.com',
            'instagram' => 'https://facebook.com',
            'whatsapp' => 'https://facebook.com',
            'telegram' => 'https://facebook.com',
        ]);
    }
}
