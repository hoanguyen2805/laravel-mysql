<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ADMINISTRATOR',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'birth_day' => '1998/05/28',
            'is_admin' => true,
            'avatar' => '/uploads/avatar/162272495460b8d1597e6c8.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Nguyen Van Hoa',
            'email' => 'hoanguyen280598@gmail.com',
            'username' => 'hoa_nguyen12',
            'password' => Hash::make('12345678'),
            'birth_day' => '2012/05/28',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272506460b8d1c7ae6e0.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Ta Ba Phu',
            'email' => 'vanhoa280598@gmail.com',
            'username' => 'baphu',
            'password' => Hash::make('12345678'),
            'birth_day' => '2012/05/28',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272520160b8d2509444d.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Tran Duy Tien',
            'email' => 'nhocconmoilon1995@gmail.com',
            'username' => 'duytien',
            'password' => Hash::make('12345678'),
            'birth_day' => '2012/05/28',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272531560b8d2c36835f.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Tran Quang Duy',
            'email' => 'hoanguyen98.nta@gmail.com',
            'username' => 'quangduy',
            'password' => Hash::make('12345678'),
            'birth_day' => '2012/05/28',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272540260b8d31a1fca4.png',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272553760b8d3a11bff9.png',
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272563160b8d3ff6f988.jpg',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272571360b8d4511db05.png',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272575760b8d47c961b6.png',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272580460b8d4ab9ec1a.png',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272584160b8d4d127b2e.png',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
            'birth_day' => '2021/06/02',
            'is_admin' => false,
            'avatar' => '/uploads/avatar/162272590360b8d50f5045d.jpg',
        ]);
    }
}
