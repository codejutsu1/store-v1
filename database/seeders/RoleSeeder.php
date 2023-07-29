<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'secretary',
            'rider'
        ];

        $permissions = [
            'view dashboard',
            'view shop',
            'view website',
            'view settings',
            'view orders',
            'confirm order'
        ];

        foreach($roles as $role) 
        {
            Role::create(['name' => $role]);
        }

        foreach($permissions as $permission) 
        {
            Permission::create(['name' => $permission]);
        }

        Role::findByName('admin')->givePermissionTo($permissions);

        Role::findByName('secretary')->givePermissionTo($permissions);

        Role::findByName('rider')->givePermissionTo('confirm order');
        
        
    }
}
