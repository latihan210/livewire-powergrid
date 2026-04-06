<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbVideoProgressTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('jpb_video_progress')->delete();

    }
}
