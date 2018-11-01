<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
              [
                  'id_product'=>12,
                  'id_user'=>1,
                  'qty'=>2,
                  'order_total'=>12000,
                  'status'=>0
              ],
              [
                'id_product'=>11,
                'id_user'=>2,
                'qty'=>3,
                'order_total'=>12000,
                'status'=>0
              ]
        ]);
    }
}
