<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'email' => 'adi@gmail.com',
            'password' => bcrypt('adi123'),
            'name' => 'Adi Sanjaya',
            'role' => 'admin'
        ]);
        \DB::table('users')->insert([
            'email' => 'bunga@gmail.com',
            'password' => bcrypt('bunga123'),
            'name' => 'Bunga Lestari',
            'role' => 'member'
        ]);
        \DB::table('users')->insert([
            'email' => 'clara@gmail.com',
            'password' => bcrypt('clara123'),
            'name' => 'Clara Nugroho',
            'role' => 'member'
        ]);
        \DB::table('users')->insert([
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('doddy123'),
            'name' => 'Doddy Saputra',
            'role' => 'admin'
        ]);
    }
}
