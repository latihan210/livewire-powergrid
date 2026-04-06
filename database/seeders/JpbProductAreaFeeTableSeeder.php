<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbProductAreaFeeTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('product_area_fees')->delete();

    }
}
