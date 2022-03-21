<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
//        \App\Models\User::factory(10)->create();
//        DB::table('users')->insert([
//            'last_name' => '渡邉',
//            'first_name' => '優太'
//        ]);
        $this->call(UserSeeder::class);

    }
}
