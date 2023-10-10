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
        DB::table('products')->insert([
            ['id' => 1, 'name' => 'Áo vest Nam', 'price' => 1000000,'sale_price'=>900000,'image'=>'','category_id'=>1,'content'=>"content"],
            ['id' => 2, 'name' => 'Áo vest Nữ', 'price' => 800000,'sale_price'=>0,'image'=>'','category_id'=>2,'content'=>""],
            ['id' => 3, 'name' => 'Quần jean', 'price' => 800000,'sale_price'=>0,'image'=>'','category_id'=>1,'content'=>""],
            ['id' => 4, 'name' => 'Váy dài', 'price' => 800000,'sale_price'=>0,'image'=>'','category_id'=>1,'content'=>""],
            ['id' => 5, 'name' => 'Iron suit', 'price' => 10000000,'sale_price'=>0,'image'=>'','category_id'=>1,'content'=>""],
            ['id' => 6, 'name' => 'Đồng hồ Rolex', 'price' => 800000,'sale_price'=>0,'image'=>'','category_id'=>6,'content'=>""],


        ]);
    }
}
