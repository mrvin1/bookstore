<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Client extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            'email' => 'adi@gmail.com',
            'password' => bcrypt('adi123'),
            'fulllname' => 'Adi Sanjaya',
            'roleId' => 1
        ]);
        DB::table('client')->insert([
            'email' => 'bunga@gmail.com',
            'password' => bcrypt('bunga123'),
            'fulllname' => 'Bunga Lestari',
            'roleId' => 2
        ]);
        DB::table('client')->insert([
            'email' => 'clara@gmail.com',
            'password' => bcrypt('clara123'),
            'fulllname' => 'Clara Nugroho',
            'roleId' => 2
        ]);
        DB::table('client')->insert([
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('doddy123'),
            'fulllname' => 'Doddy Saputra',
            'roleId' => 1
        ]);
    }
}
