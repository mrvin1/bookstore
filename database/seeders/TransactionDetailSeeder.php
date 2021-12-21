<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transactionDetail')->insert([
            'transactionID'=>1,
            'bookId'=>5
        ]);
        \DB::table('transactionDetail')->insert([
            'transactionID'=>2,
            'bookId'=>6
        ]);
       \DB::table('transactionDetail')->insert([
            'transactionID'=>3,
            'bookId'=>1
        ]);
    }
}
