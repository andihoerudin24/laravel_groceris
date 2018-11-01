<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([
        [
            'nama_kategori'=>'nama kategori',
            'foto'=>'foto',
            'deskripsi'=>'deskripsi'
           ],
           [
            'nama_kategori'=>'nama kategori kedua',
            'foto'=>'foto kedua',
            'deskripsi'=>'deskripsi kedua'
           ],
           [
            'nama_kategori'=>'nama kategori ketiga',
            'foto'=>'foto keiga',
            'deskripsi'=>'deskripsi ketiga'
           ],
       ]);
    }
}
