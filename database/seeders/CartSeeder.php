<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cart')->insert([
            'clientEmail' => 'bunga@gmail.com',
            'bookid' => 5,
            'qty' => 1
        ]);
        \DB::table('cart')->insert([
            'clientEmail' => 'bunga@gmail.com',
            'bookid' => 6,
            'qty' => 2
        ]);
        \DB::table('cart')->insert([
            'clientEmail' => 'bunga@gmail.com',
            'bookid' => 1,
            'qty' => 1
        ]);
    }
}
