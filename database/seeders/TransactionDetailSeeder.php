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
            'transactionID'=>'953a904f-8d98-4c4f-b174-86174a18be0e',
            'bookId'=>5,
            'qty'=>2
        ]);
        \DB::table('transactionDetail')->insert([
            'transactionID'=>'953a904f-8d98-4c4f-b174-86174a18be0e',
            'bookId'=>6,
            'qty'=>3
        ]);
       \DB::table('transactionDetail')->insert([
            'transactionID'=>'953a904f-8d98-4c4f-b174-86174a18be0e',
            'bookId'=>1,
            'qty'=>1
        ]);
    }
}
