<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['絵画', '日本画', '油絵', '水彩画', 'ペン画', 'イラスト', 'ポスター', 'ポストカード', '版画'];
        foreach ($types as $type){
            DB::table('art_types')->insert(['type_name' => $type]);
        }
    }
}
