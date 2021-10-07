<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'id'    => 101,
                'name' => 'primary',
            ],
            [
                'id'    => 102,
                'name' => 'success',
            ],
            [
                'id'    => 103,
                'name' => 'secondary',
            ],
            [
                'id'    => 104,
                'name' => 'danger',
            ],
            [
                'id'    => 105,
                'name' => 'warning',
            ],
            [
                'id'    => 106,
                'name' => 'info',
            ],
            [
                'id'    => 107,
                'name' => 'dark',
            ],

        ]);
    }
}
