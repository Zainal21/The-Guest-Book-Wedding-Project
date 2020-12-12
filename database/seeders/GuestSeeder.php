<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guest')->insert([
            'email' => 'test@test.com',
            'nama' => 'testing',
            'alamat' => 'testing',
            'acara_hadir' => 'Engagement'
        ]);
    }
}
