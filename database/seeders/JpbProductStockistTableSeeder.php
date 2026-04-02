<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbProductStockistTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stockist_product_stocks')->delete();
        
        
        
    }
}
