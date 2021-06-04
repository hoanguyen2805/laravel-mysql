<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            'name' => 'acer a7',
            'price' => 10000,
            'category_id' => 3,
            'image' => '/uploads/product/161962375460897f4a4da2f.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'apple macbook air 2017',
            'price' => 18000000,
            'category_id' => 3,
            'image' => '/uploads/product/161962378060897f6397d55.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'xiaomi redmi note 10',
            'price' => 21000000,
            'category_id' => 1,
            'image' => '/uploads/product/1619624163608980e2d9d43.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'macbook pro 2020 m1',
            'price' => 38000000,
            'category_id' => 3,
            'image' => '/uploads/product/161962384660897fa58e1ba.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'dell vostro 235577',
            'price' => 28900000,
            'category_id' => 3,
            'image' => '/uploads/product/161962386960897fbd43abb.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'huawei t10s',
            'price' => 5600000,
            'category_id' => 2,
            'image' => '/uploads/product/161962388760897fcedb837.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'ipad 4 cellular',
            'price' => 12000000,
            'category_id' => 2,
            'image' => '/uploads/product/161962391160897fe6be8d7.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'ipad mini 7 inch',
            'price' => 12600000,
            'category_id' => 2,
            'image' => '/uploads/product/16196239646089801c4604c.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'ipad pro 12 inch',
            'price' => 15990000,
            'category_id' => 2,
            'image' => '/uploads/product/161962399060898035b5e9e.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'iphone 12',
            'price' => 33000000,
            'category_id' => 1,
            'image' => '/uploads/product/16196240166089804f7fc21.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'lenovo tab m10',
            'price' => 3800000,
            'category_id' => 2,
            'image' => '/uploads/product/16196240396089806748335.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'oppo a15',
            'price' => 7500000,
            'category_id' => 1,
            'image' => '/uploads/product/16196240616089807ca1931.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'oppo a74',
            'price' => 3700000,
            'category_id' => 1,
            'image' => '/uploads/product/16196240776089808d66d79.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'realmi 8',
            'price' => 7600000,
            'category_id' => 1,
            'image' => '/uploads/product/16196240956089809f41bf7.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'samsung galaxy tab a7',
            'price' => 10200000,
            'category_id' => 2,
            'image' => '/uploads/product/1619624124608980bc41a5c.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'name' => 'xiaomi mi 11 lite',
            'price' => 12000000,
            'category_id' => 1,
            'image' => '/uploads/product/1619624143608980cece6a4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
