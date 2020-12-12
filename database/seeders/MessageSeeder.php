<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message')->insert([
            'guest_id' => '1',
            'pesan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
    }
}
