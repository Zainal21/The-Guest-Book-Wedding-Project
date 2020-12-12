<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'pengantin1',
            'email'=> 'penganti@penganti.com',
            'password' => bcrypt('password')
        ]);
    }
}
