<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbAreaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_area')->delete();
        
        \DB::table('jpb_area')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area_name' => 'Wilayah 1',
                'area_code' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'area_name' => 'Wilayah 2',
                'area_code' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'area_name' => 'Wilayah 3',
                'area_code' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'area_name' => 'Wilayah 4',
                'area_code' => '',
            ),
        ));
        
        
    }
}