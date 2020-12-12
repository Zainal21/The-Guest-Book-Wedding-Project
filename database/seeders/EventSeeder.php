<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
            'nama_acara' => 'Engagement',
            'waktu' => '2 June 2018',
            'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
        DB::table('event')->insert([
            'nama_acara' => 'Wedding party ',
            'waktu' => '1 June 2018',
            'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
    }
}
