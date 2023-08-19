<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'twitter' => 'https://twitter.com',
            'tiktok' => 'https://tiktok.com',
            'instagram' => 'https://instagram.com',
            'whatsapp' => 'https://whatsapp.com',
            'telegram' => 'https://telegram.com',
        ]);
    }
}
