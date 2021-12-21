<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Carbon\Carbon;

class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transactionHeader')->insert([
            'date'=>Carbon::now('Asia/Jakarta'),
            'cartId'=>1
        ]);
        \DB::table('transactionHeader')->insert([
            'date'=>Carbon::now('Asia/Jakarta'),
            'cartId'=>2
        ]);
        \DB::table('transactionHeader')->insert([
            'date'=>Carbon::now('Asia/Jakarta'),
            'cartId'=>3
        ]);
    }
}
