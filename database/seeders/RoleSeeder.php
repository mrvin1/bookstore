<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role')->insert([
            'name'=>'Admin',
        ]);
        \DB::table('role')->insert([
            'name'=>'Member',
        ]);
        \DB::table('role')->insert([
            'name'=>'Guest',
        ]);
    }
}
