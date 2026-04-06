<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbNewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('jpb_news')->delete();

    }
}
