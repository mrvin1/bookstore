<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('client')->insert([
            'email' => 'adi@gmail.com',
            'password' => bcrypt('adi123'),
            'fullname' => 'Adi Sanjaya',
            'roleId' => 1
        ]);
        \DB::table('client')->insert([
            'email' => 'bunga@gmail.com',
            'password' => bcrypt('bunga123'),
            'fullname' => 'Bunga Lestari',
            'roleId' => 2
        ]);
        \DB::table('client')->insert([
            'email' => 'clara@gmail.com',
            'password' => bcrypt('clara123'),
            'fullname' => 'Clara Nugroho',
            'roleId' => 2
        ]);
        \DB::table('client')->insert([
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('doddy123'),
            'fullname' => 'Doddy Saputra',
            'roleId' => 1
        ]);
    }
}
