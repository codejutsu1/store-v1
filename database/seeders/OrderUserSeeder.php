<?php

namespace Database\Seeders;

use App\Models\OrderUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderUser::factory()
            ->count(300)
            ->create();
    }
}
