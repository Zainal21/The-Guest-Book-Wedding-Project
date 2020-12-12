<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'nama_website' => 'wedding_project',
            'kode_analitic' => 'JKSHA0702432'
        ]);
    }
}
