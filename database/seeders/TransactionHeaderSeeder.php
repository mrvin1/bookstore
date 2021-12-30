<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
            'id'=>Str::orderedUuid(),
            'email'=>'bunga@gmail.com',
            'date'=>Carbon::now('Asia/Jakarta'),
        ]);
        \DB::table('transactionHeader')->insert([
            'id'=>Str::orderedUuid(),
            'email'=>'bunga@gmail.com',
            'date'=>Carbon::now('Asia/Jakarta'),
        ]);
        \DB::table('transactionHeader')->insert([
            'id'=>Str::orderedUuid(),
            'email'=>'bunga@gmail.com',
            'date'=>Carbon::now('Asia/Jakarta'),
        ]);
    }
}
