<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id' => 2100000001,
            'name'=>'Nguyễn Văn Vũ',
            'phone'=>'0346486884',
            'email'=>'vhomevungtau@gmail.com',
            'birthday'=>'1984-08-06',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
        ]);

        $role = Role::findById('210001');

        $user->assignRole($role);

    }
}
