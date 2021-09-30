<?php

namespace Database\Seeders;

use App\Models\Permissions;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create([
            'id'    => 210001,
            'name' => 'admin',
            'desc'  => 'Quản trị'
        ]);

        // $role = Role::findById('210001');

        $permissions = Permissions::all();

        foreach ($permissions as $permission) {
            $role->givePermissionTo($permission);
        }


    }
}
