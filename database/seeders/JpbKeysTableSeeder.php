<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbKeysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_keys')->delete();
        
        \DB::table('jpb_keys')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_member' => 0,
                'name' => 'mobile-app',
                'key' => 'ZGo5U0FrR3VTTWVWQk15MDAzMU1RZz09',
                'level' => 1,
                'ignore_limits' => 0,
                'is_private_key' => 0,
                'ip_addresses' => NULL,
                'datecreated' => '2025-04-01 00:00:00',
                'datemodified' => '2025-04-01 00:00:00',
            ),
        ));
        
        
    }
}