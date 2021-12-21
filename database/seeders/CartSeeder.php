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
            'qty' => 1,
            'totalPrice'=> 275000,
            'subTotal' => 275000
        ]);
        \DB::table('cart')->insert([
            'clientEmail' => 'doddy@gmail.com',
            'bookid' => 6,
            'qty' => 2,
            'totalPrice'=> 319000,
            'subTotal' => 638000
        ]);
        \DB::table('cart')->insert([
            'clientEmail' => 'clara@gmail.com',
            'bookid' => 1,
            'qty' => 1,
            'totalPrice'=> 300000,
            'subTotal' => 300000
        ]);
    }
}
