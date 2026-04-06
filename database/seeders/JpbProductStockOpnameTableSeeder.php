<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbProductStockOpnameTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('product_stock_opnames')->delete();

    }
}
