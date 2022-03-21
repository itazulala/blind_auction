<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['〜 19cm', '20cm 〜 49cm', '50cm 〜 69cm', '70cm 〜 1m', '1m 〜'];
        foreach ($sizes as $size){
            DB::table('sizes')->insert(['size' => $size]);
        }
    }
}
