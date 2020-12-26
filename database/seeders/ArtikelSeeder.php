<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
        	'judul' => 'Testing Judul',
        	'gambar' => 'gambar (1).jpg',
        	'isi' => 'testing isi'
        ]);
    }
}
