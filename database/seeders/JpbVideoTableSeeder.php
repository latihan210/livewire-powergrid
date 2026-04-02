<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbVideoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_video')->delete();
        
        \DB::table('jpb_video')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Hidup dalam kisah yang rata-rata',
                'url' => 'https://jpbuana.s3.us-west-004.backblazeb2.com/video_files/1750056033.mp4',
                'sequence' => 1,
                'image' => 'https://jpbuana.s3.us-west-004.backblazeb2.com/video_thumbnail/1750056033.png',
                'status' => 1,
                'datecreated' => '2025-05-28 15:50:34',
                'datemodified' => '2025-06-16 13:40:38',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'test 2',
                'url' => 'https://jpbuana.s3.us-west-004.backblazeb2.com/video_files/1748499706.mp4',
                'sequence' => 2,
                'image' => 'https://jpbuana.s3.us-west-004.backblazeb2.com/video_thumbnail/1748426131.jpg',
                'status' => 2,
                'datecreated' => '2025-05-28 16:55:36',
                'datemodified' => '2025-06-16 13:49:57',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'test 3',
                'url' => 'https://jpbuana.s3.us-west-004.backblazeb2.com/video_files/1748426237.mp4',
                'sequence' => 3,
                'image' => 'https://jpbuana.s3.us-west-004.backblazeb2.com/video_thumbnail/1748426237.jpg',
                'status' => 2,
                'datecreated' => '2025-05-28 16:57:22',
                'datemodified' => '2025-06-12 19:41:56',
            ),
        ));
        
        
    }
}