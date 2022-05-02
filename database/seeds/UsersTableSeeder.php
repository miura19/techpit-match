<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'あみ',
            'email' => 'ami@test.com',
            'sex' => '1',
            'self_introduction' => '赤羽のあみです。',
            'img_name' => 'ami.jpg',
            'password' => Hash::make('12345678'),
            ],
            ['name' => 'あやか',
            'email' => 'ayaka@test.com',
            'sex' => '1',
            'self_introduction' => '土居さんの嫁です。',
            'img_name' => 'ayaka.jpg',
            'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
