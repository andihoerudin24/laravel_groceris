<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'     =>'andi hoerudin',
            'email'    =>'andihoerudin24@gmail.com',
            'password' =>bcrypt('andihoerudin'),
        ]);
    }
}
