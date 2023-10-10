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
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Áo nam', 'status' => 1],
            ['id' => 2, 'name' => 'Áo nữ', 'status' => 0],
            ['id' => 3, 'name' => 'Quần bò', 'status' => 0],
            ['id' => 4, 'name' => 'Túi xách', 'status' => 1],
            ['id' => 5, 'name' => 'Ví da', 'status' => 1],
            ['id' => 6, 'name' => 'Giày dép', 'status' => 1],
            ['id' => 7, 'name' => 'Dây lưng', 'status' => 1],
            ['id' => 8, 'name' => 'Đồng hồ', 'status' => 1]

        ]);
    }
}
