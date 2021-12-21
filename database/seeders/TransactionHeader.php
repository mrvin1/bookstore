<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionHeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactionHeader')->insert([
            'date'=>datetime(),
            'cartId'=>1
        ]);
        DB::table('transactionHeader')->insert([
            'date'=>datetime(),
            'cartId'=>2
        ]);
        DB::table('transactionHeader')->insert([
            'date'=>datetime(),
            'cartId'=>3
        ]);
    }
}
