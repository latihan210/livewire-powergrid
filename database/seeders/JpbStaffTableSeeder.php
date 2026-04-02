<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbStaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_staff')->delete();
        
        \DB::table('jpb_staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'dhaeka',
                'password' => '$2y$05$/s8OKtTUyAg2S6DJzfBP7OBzD8pJ28951BpZF7W1IDuRFOe.4Fq7i',
                'name' => 'YUDA EKA FISABILILLAH',
                'email' => 'info.dhaeka@gmail.com',
                'phone' => '+6285211838515',
                'photo' => '',
                'access' => 'all',
                'role' => 'a:8:{i:0;s:2:"40";i:1;s:2:"41";i:2;s:2:"42";i:3;s:2:"43";i:4;s:2:"44";i:5;s:2:"46";i:6;s:2:"48";i:7;s:2:"64";}',
                'status' => 1,
                'datecreated' => '2018-12-04 20:45:11',
                'datemodified' => '2025-01-22 17:57:37',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'admincic',
                'password' => '$2y$05$3dYjuF76HqHI2YQf6hBZVefyNR4wpSq8RTJ01vDx/xsPzNOyRP6Xa',
                'name' => 'ADMIN CIC',
                'email' => 'admin@gmail.com',
                'phone' => '+628000000000',
                'photo' => '',
                'access' => 'all',
                'role' => 'a:8:{i:0;s:2:"40";i:1;s:2:"41";i:2;s:2:"42";i:3;s:2:"43";i:4;s:2:"44";i:5;s:2:"46";i:6;s:2:"48";i:7;s:2:"64";}',
                'status' => 1,
                'datecreated' => '2021-11-30 06:55:37',
                'datemodified' => '2025-01-22 17:57:39',
            ),
            2 => 
            array (
                'id' => 5,
                'username' => 'staff01',
                'password' => '$2y$05$XQsSMUrkJXKHnlHjhawsouB5VFgTr3aPp0I70yWW6nUa7dPNyOCae',
                'name' => 'TSTING',
                'email' => 'cic.community@gmail.com',
                'phone' => '082345689812',
                'photo' => '',
                'access' => 'all',
                'role' => '0',
                'status' => 1,
                'datecreated' => '2025-04-16 14:50:57',
                'datemodified' => '2025-04-16 14:50:57',
            ),
        ));
        
        
    }
}