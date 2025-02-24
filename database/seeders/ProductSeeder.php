<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'    => 2101,
                'name' => 'Gội đầu dưỡng sinh',
                'desc'  => 'Quản trị'
            ]
        ]);
    }
}
