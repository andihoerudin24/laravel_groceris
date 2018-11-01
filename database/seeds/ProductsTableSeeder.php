<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [
              'id_categories'=>5,
              'name_product'=>'nama product satu',
              'price'=>'price satu',
              'foto'=>'foto satu',
              'stock'=>12,
          ],
          [
            'id_categories'=>5,
            'name_product'=>'nama product dua',
            'price'=>'price dua',
            'foto'=>'foto dua',
            'stock'=>12,
          ],
          [

            'id_categories'=>7,
            'name_product'=>'nama product tiga',
            'price'=>'price tiga',
            'foto'=>'foto tiga',
             'stock'=>12,
        ],
        ]);
    }
}
