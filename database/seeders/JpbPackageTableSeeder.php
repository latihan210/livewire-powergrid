<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbPackageTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('jpb_package')->delete();

        \DB::table('jpb_package')->insert([
            0 => [
                'package' => 'member',
                'package_name' => 'Member',
                'package_index' => 1,
                'package_count' => 1,
                'bv' => 2500,
                'nominal' => 3300000,
                'sponsor_percent' => 0,
                'passup_percent' => 0,
                'pairing_percent' => 0,
                'pairing_nominal' => 0,
                'pairing_max' => 0,
                'pairing_point' => 1,
                'reward_point' => 0.0,
                'description' => null,
                'is_register' => 1,
                'is_order' => 1,
                'is_active' => 1,
                'datecreated' => '2025-04-01 00:00:00',
                'datemodified' => '2025-04-16 15:16:57',
                'modified_by' => null,
            ],
            1 => [
                'package' => 'star_member',
                'package_name' => 'STAR MEMBER',
                'package_index' => 2,
                'package_count' => 1,
                'bv' => 2500,
                'nominal' => 0,
                'sponsor_percent' => 0,
                'passup_percent' => 0,
                'pairing_percent' => 0,
                'pairing_nominal' => 0,
                'pairing_max' => 0,
                'pairing_point' => 0,
                'reward_point' => 1.0,
                'description' => 'rekrut 3 member',
                'is_register' => 0,
                'is_order' => 0,
                'is_active' => 1,
                'datecreated' => '2025-04-01 00:00:00',
                'datemodified' => '2025-04-16 15:24:39',
                'modified_by' => null,
            ],
        ]);

    }
}
