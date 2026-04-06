<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbBonusMatchingRefsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('bonus_matching_refs')->delete();

    }
}
