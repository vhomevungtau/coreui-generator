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
                'id'    => 210001,
                'name' => 'primary',
            ],
            [
                'id'    => 210002,
                'name' => 'success',
            ],
            [
                'id'    => 210003,
                'name' => 'secondary',
            ],
            [
                'id'    => 210004,
                'name' => 'danger',
            ],
            [
                'id'    => 210005,
                'name' => 'warning',
            ],
            [
                'id'    => 210006,
                'name' => 'info',
            ],
            [
                'id'    => 210007,
                'name' => 'dark',
            ],

        ]);
    }
}
