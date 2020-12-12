<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            'photo' => '/upload/photo1.jpg'
        ]);

        DB::table('gallery')->insert([
            'photo' => '/upload/photo2.jpg'
        ]);
    }

}
