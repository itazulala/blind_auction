<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        DB::table('users')->insert([
//            'last_name' => '渡邉',
//            'first_name' => '優太'
//        ]);
        \App\Models\User::factory(10)->create();
    }
}
