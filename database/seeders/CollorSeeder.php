<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['赤', '青', '黄', 'ピンク', '白', '黒', '緑', 'モノクロ', 'カラフル', 'パステル'];
        foreach ($colors as $color){
            DB::table('colors')->insert(['color_name' => $color]);
        }


    }
}
