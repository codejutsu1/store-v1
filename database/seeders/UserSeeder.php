<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('mypassword')
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Secretary',
            'email' => 'secretary@secretary.com',
            'password' => Hash::make('mypassword')
        ]);

        $user->assignRole('secretary');

        $user = User::create([
            'name' => 'rider',
            'email' => 'rider@rider.com',
            'password' => Hash::make('mypassword')
        ]);

        $user->assignRole('rider');
    }
}
