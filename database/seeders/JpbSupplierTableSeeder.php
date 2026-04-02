<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbSupplierTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_supplier')->delete();
        
        \DB::table('jpb_supplier')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'JP Buana',
                'email' => '',
                'phone' => '',
                'address' => '',
                'id_contact_kledo' => 0,
                'status' => 1,
                'datecreated' => '2025-04-10 15:47:56',
                'datemodified' => '2025-04-10 15:47:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Comtech',
                'email' => '',
                'phone' => '',
                'address' => '',
                'id_contact_kledo' => 0,
                'status' => 1,
                'datecreated' => '2025-06-27 13:57:34',
                'datemodified' => '2025-06-27 13:57:34',
            ),
        ));
        
        
    }
}