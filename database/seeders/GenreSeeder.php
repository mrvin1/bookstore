<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'name'=>'Fiction',
        ]);
        DB::table('genre')->insert([
            'name'=>'Adventure',
        ]);
        DB::table('genre')->insert([
            'name'=>'Young Adult',
        ]);
        DB::table('genre')->insert([
            'name'=>'Fantasy',
        ]);
        DB::table('genre')->insert([
            'name'=>'Family',
        ]);
        DB::table('genre')->insert([
            'name'=>'Autobiography',
        ]);
        DB::table('genre')->insert([
            'name'=>'Health',
        ]);
        DB::table('genre')->insert([
            'name'=>'Classic',
        ]);
        DB::table('genre')->insert([
            'name'=>'Children',
        ]);
        DB::table('genre')->insert([
            'name'=>'Horror',
        ]);
        DB::table('genre')->insert([
            'name'=>'Thriller',
        ]);
        DB::table('genre')->insert([
            'name'=>'Dark Fantasy',
        ]);
        DB::table('genre')->insert([
            'name'=>'Science Fiction',
        ]);
        DB::table('genre')->insert([
            'name'=>'Literature',
        ]);
        DB::table('genre')->insert([
            'name'=>'Cultural',
        ]);
        DB::table('genre')->insert([
            'name'=>'Romance',
        ]);
       
    }
}
