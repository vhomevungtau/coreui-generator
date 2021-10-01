<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            [
                'id'    => 210001,
                'name' => 'admin',
                'desc'  => 'Quản trị'
            ],
            [
                'id'    => 210002,
                'name' => 'user',
                'desc'  => 'Người dùng'
            ]

        ]);


        $role = Role::findById('210001');

        $permissions = Permissions::all();

        foreach ($permissions as $permission) {
            $role->permissions()->attach($permission);
        }
    }
}
