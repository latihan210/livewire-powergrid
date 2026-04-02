<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbLogCronTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_log_cron')->delete();
        
        \DB::table('jpb_log_cron')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-23 00:10:01',
                'end_time' => '2025-04-23 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0313 seconds, Log : ',
            ),
            1 => 
            array (
                'id' => 2,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-24 00:10:00',
                'end_time' => '2025-04-24 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0222 seconds, Log : ',
            ),
            2 => 
            array (
                'id' => 3,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-25 00:10:00',
                'end_time' => '2025-04-25 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0134 seconds, Log : ',
            ),
            3 => 
            array (
                'id' => 4,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-26 00:05:00',
                'end_time' => '2025-04-26 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0498 seconds, Log : ',
            ),
            4 => 
            array (
                'id' => 5,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-26 00:10:00',
                'end_time' => '2025-04-26 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0317 seconds, Log : ',
            ),
            5 => 
            array (
                'id' => 6,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-27 00:05:00',
                'end_time' => '2025-04-27 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0480 seconds, Log : ',
            ),
            6 => 
            array (
                'id' => 7,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-27 00:10:00',
                'end_time' => '2025-04-27 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0084 seconds, Log : ',
            ),
            7 => 
            array (
                'id' => 8,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-28 00:05:00',
                'end_time' => '2025-04-28 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0496 seconds, Log : ',
            ),
            8 => 
            array (
                'id' => 9,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-28 00:10:00',
                'end_time' => '2025-04-28 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0091 seconds, Log : ',
            ),
            9 => 
            array (
                'id' => 10,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-29 00:05:00',
                'end_time' => '2025-04-29 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0472 seconds, Log : ',
            ),
            10 => 
            array (
                'id' => 11,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-29 00:10:00',
                'end_time' => '2025-04-29 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0226 seconds, Log : ',
            ),
            11 => 
            array (
                'id' => 12,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-30 00:05:00',
                'end_time' => '2025-04-30 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0455 seconds, Log : ',
            ),
            12 => 
            array (
                'id' => 13,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-04-30 00:10:00',
                'end_time' => '2025-04-30 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0119 seconds, Log : ',
            ),
            13 => 
            array (
                'id' => 14,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-01 00:05:00',
                'end_time' => '2025-05-01 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0471 seconds, Log : ',
            ),
            14 => 
            array (
                'id' => 15,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-01 00:10:00',
                'end_time' => '2025-05-01 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0048 seconds, Log : Data Deposite tidak ditemukan',
            ),
            15 => 
            array (
                'id' => 16,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-02 00:05:00',
                'end_time' => '2025-05-02 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0575 seconds, Log : ',
            ),
            16 => 
            array (
                'id' => 17,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-02 00:10:00',
                'end_time' => '2025-05-02 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0303 seconds, Log : ',
            ),
            17 => 
            array (
                'id' => 18,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-03 00:05:00',
                'end_time' => '2025-05-03 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0487 seconds, Log : ',
            ),
            18 => 
            array (
                'id' => 19,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-03 00:10:00',
                'end_time' => '2025-05-03 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0104 seconds, Log : ',
            ),
            19 => 
            array (
                'id' => 20,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-04 00:05:01',
                'end_time' => '2025-05-04 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0536 seconds, Log : ',
            ),
            20 => 
            array (
                'id' => 21,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-04 00:10:01',
                'end_time' => '2025-05-04 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0100 seconds, Log : ',
            ),
            21 => 
            array (
                'id' => 22,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-05 00:05:00',
                'end_time' => '2025-05-05 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0462 seconds, Log : ',
            ),
            22 => 
            array (
                'id' => 23,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-05 00:10:00',
                'end_time' => '2025-05-05 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0243 seconds, Log : ',
            ),
            23 => 
            array (
                'id' => 24,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-06 00:05:00',
                'end_time' => '2025-05-06 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0454 seconds, Log : ',
            ),
            24 => 
            array (
                'id' => 25,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-06 00:10:00',
                'end_time' => '2025-05-06 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0160 seconds, Log : ',
            ),
            25 => 
            array (
                'id' => 26,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-07 00:05:00',
                'end_time' => '2025-05-07 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0492 seconds, Log : ',
            ),
            26 => 
            array (
                'id' => 27,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-07 00:10:00',
                'end_time' => '2025-05-07 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0125 seconds, Log : ',
            ),
            27 => 
            array (
                'id' => 28,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-08 00:05:00',
                'end_time' => '2025-05-08 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0586 seconds, Log : ',
            ),
            28 => 
            array (
                'id' => 29,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-08 00:10:00',
                'end_time' => '2025-05-08 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0241 seconds, Log : ',
            ),
            29 => 
            array (
                'id' => 30,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-09 00:05:00',
                'end_time' => '2025-05-09 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0515 seconds, Log : ',
            ),
            30 => 
            array (
                'id' => 31,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-09 00:10:00',
                'end_time' => '2025-05-09 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0082 seconds, Log : ',
            ),
            31 => 
            array (
                'id' => 32,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-10 00:05:01',
                'end_time' => '2025-05-10 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0541 seconds, Log : ',
            ),
            32 => 
            array (
                'id' => 33,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-10 00:10:01',
                'end_time' => '2025-05-10 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0174 seconds, Log : ',
            ),
            33 => 
            array (
                'id' => 34,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-11 00:05:00',
                'end_time' => '2025-05-11 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0546 seconds, Log : ',
            ),
            34 => 
            array (
                'id' => 35,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-11 00:10:00',
                'end_time' => '2025-05-11 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0082 seconds, Log : ',
            ),
            35 => 
            array (
                'id' => 36,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-12 00:05:00',
                'end_time' => '2025-05-12 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0494 seconds, Log : ',
            ),
            36 => 
            array (
                'id' => 37,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-12 00:10:00',
                'end_time' => '2025-05-12 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0083 seconds, Log : ',
            ),
            37 => 
            array (
                'id' => 38,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-13 00:05:00',
                'end_time' => '2025-05-13 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0486 seconds, Log : ',
            ),
            38 => 
            array (
                'id' => 39,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-13 00:10:00',
                'end_time' => '2025-05-13 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0258 seconds, Log : ',
            ),
            39 => 
            array (
                'id' => 40,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-14 00:05:01',
                'end_time' => '2025-05-14 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0518 seconds, Log : ',
            ),
            40 => 
            array (
                'id' => 41,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-14 00:10:01',
                'end_time' => '2025-05-14 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0195 seconds, Log : ',
            ),
            41 => 
            array (
                'id' => 42,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-15 00:05:00',
                'end_time' => '2025-05-15 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0483 seconds, Log : ',
            ),
            42 => 
            array (
                'id' => 43,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-15 00:10:00',
                'end_time' => '2025-05-15 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0110 seconds, Log : ',
            ),
            43 => 
            array (
                'id' => 44,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-16 00:05:00',
                'end_time' => '2025-05-16 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0464 seconds, Log : ',
            ),
            44 => 
            array (
                'id' => 45,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-16 00:10:00',
                'end_time' => '2025-05-16 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0288 seconds, Log : ',
            ),
            45 => 
            array (
                'id' => 46,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-17 00:05:00',
                'end_time' => '2025-05-17 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0466 seconds, Log : ',
            ),
            46 => 
            array (
                'id' => 47,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-17 00:10:00',
                'end_time' => '2025-05-17 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0152 seconds, Log : ',
            ),
            47 => 
            array (
                'id' => 48,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-18 00:05:01',
                'end_time' => '2025-05-18 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0430 seconds, Log : ',
            ),
            48 => 
            array (
                'id' => 49,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-18 00:10:01',
                'end_time' => '2025-05-18 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0083 seconds, Log : ',
            ),
            49 => 
            array (
                'id' => 50,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-19 00:05:00',
                'end_time' => '2025-05-19 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0438 seconds, Log : ',
            ),
            50 => 
            array (
                'id' => 51,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-19 00:10:00',
                'end_time' => '2025-05-19 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0242 seconds, Log : ',
            ),
            51 => 
            array (
                'id' => 52,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-20 00:05:00',
                'end_time' => '2025-05-20 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0451 seconds, Log : ',
            ),
            52 => 
            array (
                'id' => 53,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-20 00:10:00',
                'end_time' => '2025-05-20 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0083 seconds, Log : ',
            ),
            53 => 
            array (
                'id' => 54,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-21 00:05:00',
                'end_time' => '2025-05-21 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0461 seconds, Log : ',
            ),
            54 => 
            array (
                'id' => 55,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-21 00:10:00',
                'end_time' => '2025-05-21 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0293 seconds, Log : ',
            ),
            55 => 
            array (
                'id' => 56,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-22 00:05:01',
                'end_time' => '2025-05-22 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0514 seconds, Log : ',
            ),
            56 => 
            array (
                'id' => 57,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-22 00:10:00',
                'end_time' => '2025-05-22 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0095 seconds, Log : ',
            ),
            57 => 
            array (
                'id' => 58,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-23 00:05:00',
                'end_time' => '2025-05-23 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0489 seconds, Log : ',
            ),
            58 => 
            array (
                'id' => 59,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-23 00:10:00',
                'end_time' => '2025-05-23 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            59 => 
            array (
                'id' => 60,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-24 00:05:00',
                'end_time' => '2025-05-24 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0457 seconds, Log : ',
            ),
            60 => 
            array (
                'id' => 61,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-24 00:10:00',
                'end_time' => '2025-05-24 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0090 seconds, Log : ',
            ),
            61 => 
            array (
                'id' => 62,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-25 00:05:00',
                'end_time' => '2025-05-25 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0509 seconds, Log : ',
            ),
            62 => 
            array (
                'id' => 63,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-25 00:10:00',
                'end_time' => '2025-05-25 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0180 seconds, Log : ',
            ),
            63 => 
            array (
                'id' => 64,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-26 00:05:00',
                'end_time' => '2025-05-26 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0514 seconds, Log : ',
            ),
            64 => 
            array (
                'id' => 65,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-26 00:10:00',
                'end_time' => '2025-05-26 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0084 seconds, Log : ',
            ),
            65 => 
            array (
                'id' => 66,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-27 00:05:00',
                'end_time' => '2025-05-27 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0489 seconds, Log : ',
            ),
            66 => 
            array (
                'id' => 67,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-27 00:10:00',
                'end_time' => '2025-05-27 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0096 seconds, Log : ',
            ),
            67 => 
            array (
                'id' => 68,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-28 00:05:00',
                'end_time' => '2025-05-28 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0481 seconds, Log : ',
            ),
            68 => 
            array (
                'id' => 69,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-28 00:10:00',
                'end_time' => '2025-05-28 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0194 seconds, Log : ',
            ),
            69 => 
            array (
                'id' => 70,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-29 00:05:00',
                'end_time' => '2025-05-29 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0520 seconds, Log : ',
            ),
            70 => 
            array (
                'id' => 71,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-29 00:10:00',
                'end_time' => '2025-05-29 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0127 seconds, Log : ',
            ),
            71 => 
            array (
                'id' => 72,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-30 00:05:00',
                'end_time' => '2025-05-30 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0474 seconds, Log : ',
            ),
            72 => 
            array (
                'id' => 73,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-30 00:10:00',
                'end_time' => '2025-05-30 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0326 seconds, Log : ',
            ),
            73 => 
            array (
                'id' => 74,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-31 00:05:00',
                'end_time' => '2025-05-31 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0512 seconds, Log : ',
            ),
            74 => 
            array (
                'id' => 75,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-05-31 00:10:00',
                'end_time' => '2025-05-31 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0115 seconds, Log : ',
            ),
            75 => 
            array (
                'id' => 76,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-01 00:05:00',
                'end_time' => '2025-06-01 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0481 seconds, Log : ',
            ),
            76 => 
            array (
                'id' => 77,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-01 00:10:00',
                'end_time' => '2025-06-01 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0087 seconds, Log : ',
            ),
            77 => 
            array (
                'id' => 78,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-02 00:05:01',
                'end_time' => '2025-06-02 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0481 seconds, Log : ',
            ),
            78 => 
            array (
                'id' => 79,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-02 00:10:01',
                'end_time' => '2025-06-02 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0108 seconds, Log : ',
            ),
            79 => 
            array (
                'id' => 80,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-03 00:05:00',
                'end_time' => '2025-06-03 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0471 seconds, Log : ',
            ),
            80 => 
            array (
                'id' => 81,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-03 00:10:00',
                'end_time' => '2025-06-03 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0109 seconds, Log : ',
            ),
            81 => 
            array (
                'id' => 82,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-04 00:05:00',
                'end_time' => '2025-06-04 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0473 seconds, Log : ',
            ),
            82 => 
            array (
                'id' => 83,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-04 00:10:00',
                'end_time' => '2025-06-04 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0129 seconds, Log : ',
            ),
            83 => 
            array (
                'id' => 84,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-05 00:05:00',
                'end_time' => '2025-06-05 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0495 seconds, Log : ',
            ),
            84 => 
            array (
                'id' => 85,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-05 00:10:00',
                'end_time' => '2025-06-05 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0131 seconds, Log : ',
            ),
            85 => 
            array (
                'id' => 86,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-06 00:05:00',
                'end_time' => '2025-06-06 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0496 seconds, Log : ',
            ),
            86 => 
            array (
                'id' => 87,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-06 00:10:00',
                'end_time' => '2025-06-06 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0084 seconds, Log : Data Deposite tidak ditemukan',
            ),
            87 => 
            array (
                'id' => 88,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-07 00:05:00',
                'end_time' => '2025-06-07 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0491 seconds, Log : ',
            ),
            88 => 
            array (
                'id' => 89,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-07 00:10:00',
                'end_time' => '2025-06-07 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0057 seconds, Log : Data Deposite tidak ditemukan',
            ),
            89 => 
            array (
                'id' => 90,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-08 00:05:01',
                'end_time' => '2025-06-08 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0540 seconds, Log : ',
            ),
            90 => 
            array (
                'id' => 91,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-08 00:10:01',
                'end_time' => '2025-06-08 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0067 seconds, Log : Data Deposite tidak ditemukan',
            ),
            91 => 
            array (
                'id' => 92,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-09 00:05:00',
                'end_time' => '2025-06-09 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0595 seconds, Log : ',
            ),
            92 => 
            array (
                'id' => 93,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-09 00:10:00',
                'end_time' => '2025-06-09 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0056 seconds, Log : Data Deposite tidak ditemukan',
            ),
            93 => 
            array (
                'id' => 94,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-10 00:05:00',
                'end_time' => '2025-06-10 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0473 seconds, Log : ',
            ),
            94 => 
            array (
                'id' => 95,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-10 00:10:00',
                'end_time' => '2025-06-10 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0058 seconds, Log : Data Deposite tidak ditemukan',
            ),
            95 => 
            array (
                'id' => 96,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-11 00:05:00',
                'end_time' => '2025-06-11 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0461 seconds, Log : ',
            ),
            96 => 
            array (
                'id' => 97,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-11 00:10:01',
                'end_time' => '2025-06-11 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0065 seconds, Log : Data Deposite tidak ditemukan',
            ),
            97 => 
            array (
                'id' => 98,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-12 00:05:00',
                'end_time' => '2025-06-12 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0449 seconds, Log : ',
            ),
            98 => 
            array (
                'id' => 99,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-12 00:10:00',
                'end_time' => '2025-06-12 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0596 seconds, Log : ',
            ),
            99 => 
            array (
                'id' => 100,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-13 00:05:00',
                'end_time' => '2025-06-13 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0469 seconds, Log : ',
            ),
            100 => 
            array (
                'id' => 101,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-13 00:10:00',
                'end_time' => '2025-06-13 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0201 seconds, Log : ',
            ),
            101 => 
            array (
                'id' => 102,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-14 00:05:00',
                'end_time' => '2025-06-14 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0479 seconds, Log : ',
            ),
            102 => 
            array (
                'id' => 103,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-14 00:10:00',
                'end_time' => '2025-06-14 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0207 seconds, Log : ',
            ),
            103 => 
            array (
                'id' => 104,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-15 00:05:01',
                'end_time' => '2025-06-15 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0474 seconds, Log : ',
            ),
            104 => 
            array (
                'id' => 105,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-15 00:10:00',
                'end_time' => '2025-06-15 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0067 seconds, Log : Data Deposite tidak ditemukan',
            ),
            105 => 
            array (
                'id' => 106,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-16 00:05:00',
                'end_time' => '2025-06-16 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0473 seconds, Log : ',
            ),
            106 => 
            array (
                'id' => 107,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-16 00:10:00',
                'end_time' => '2025-06-16 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0071 seconds, Log : Data Deposite tidak ditemukan',
            ),
            107 => 
            array (
                'id' => 108,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-17 00:05:00',
                'end_time' => '2025-06-17 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0486 seconds, Log : ',
            ),
            108 => 
            array (
                'id' => 109,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-17 00:10:00',
                'end_time' => '2025-06-17 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0060 seconds, Log : Data Deposite tidak ditemukan',
            ),
            109 => 
            array (
                'id' => 110,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-18 00:05:00',
                'end_time' => '2025-06-18 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0478 seconds, Log : ',
            ),
            110 => 
            array (
                'id' => 111,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-18 00:10:00',
                'end_time' => '2025-06-18 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0070 seconds, Log : Data Deposite tidak ditemukan',
            ),
            111 => 
            array (
                'id' => 112,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-19 00:05:00',
                'end_time' => '2025-06-19 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0464 seconds, Log : ',
            ),
            112 => 
            array (
                'id' => 113,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-19 00:10:00',
                'end_time' => '2025-06-19 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0335 seconds, Log : ',
            ),
            113 => 
            array (
                'id' => 114,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-20 00:05:00',
                'end_time' => '2025-06-20 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0467 seconds, Log : ',
            ),
            114 => 
            array (
                'id' => 115,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-20 00:10:00',
                'end_time' => '2025-06-20 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0167 seconds, Log : ',
            ),
            115 => 
            array (
                'id' => 116,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-21 00:05:01',
                'end_time' => '2025-06-21 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0652 seconds, Log : ',
            ),
            116 => 
            array (
                'id' => 117,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-21 00:10:01',
                'end_time' => '2025-06-21 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0165 seconds, Log : ',
            ),
            117 => 
            array (
                'id' => 118,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-22 00:05:00',
                'end_time' => '2025-06-22 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0453 seconds, Log : ',
            ),
            118 => 
            array (
                'id' => 119,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-22 00:10:00',
                'end_time' => '2025-06-22 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0098 seconds, Log : ',
            ),
            119 => 
            array (
                'id' => 120,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-23 00:05:00',
                'end_time' => '2025-06-23 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0440 seconds, Log : ',
            ),
            120 => 
            array (
                'id' => 121,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-23 00:10:00',
                'end_time' => '2025-06-23 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0209 seconds, Log : ',
            ),
            121 => 
            array (
                'id' => 122,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-24 00:05:00',
                'end_time' => '2025-06-24 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0448 seconds, Log : ',
            ),
            122 => 
            array (
                'id' => 123,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-24 00:10:00',
                'end_time' => '2025-06-24 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0096 seconds, Log : ',
            ),
            123 => 
            array (
                'id' => 124,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-25 00:05:01',
                'end_time' => '2025-06-25 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0469 seconds, Log : ',
            ),
            124 => 
            array (
                'id' => 125,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-25 00:10:01',
                'end_time' => '2025-06-25 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            125 => 
            array (
                'id' => 126,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-26 00:05:00',
                'end_time' => '2025-06-26 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0456 seconds, Log : ',
            ),
            126 => 
            array (
                'id' => 127,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-26 00:10:00',
                'end_time' => '2025-06-26 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0126 seconds, Log : ',
            ),
            127 => 
            array (
                'id' => 128,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-27 00:05:00',
                'end_time' => '2025-06-27 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0447 seconds, Log : ',
            ),
            128 => 
            array (
                'id' => 129,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-27 00:10:00',
                'end_time' => '2025-06-27 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0231 seconds, Log : ',
            ),
            129 => 
            array (
                'id' => 130,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-28 00:05:00',
                'end_time' => '2025-06-28 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0471 seconds, Log : ',
            ),
            130 => 
            array (
                'id' => 131,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-28 00:10:00',
                'end_time' => '2025-06-28 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0221 seconds, Log : ',
            ),
            131 => 
            array (
                'id' => 132,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-29 00:05:00',
                'end_time' => '2025-06-29 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0445 seconds, Log : ',
            ),
            132 => 
            array (
                'id' => 133,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-29 00:10:00',
                'end_time' => '2025-06-29 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0093 seconds, Log : ',
            ),
            133 => 
            array (
                'id' => 134,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-30 00:05:00',
                'end_time' => '2025-06-30 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0483 seconds, Log : ',
            ),
            134 => 
            array (
                'id' => 135,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-06-30 00:10:00',
                'end_time' => '2025-06-30 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0091 seconds, Log : ',
            ),
            135 => 
            array (
                'id' => 136,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-01 00:05:00',
                'end_time' => '2025-07-01 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0485 seconds, Log : ',
            ),
            136 => 
            array (
                'id' => 137,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-01 00:10:00',
                'end_time' => '2025-07-01 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0091 seconds, Log : ',
            ),
            137 => 
            array (
                'id' => 138,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-02 00:05:00',
                'end_time' => '2025-07-02 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0484 seconds, Log : ',
            ),
            138 => 
            array (
                'id' => 139,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-02 00:10:00',
                'end_time' => '2025-07-02 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0095 seconds, Log : ',
            ),
            139 => 
            array (
                'id' => 140,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-03 00:05:00',
                'end_time' => '2025-07-03 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0457 seconds, Log : ',
            ),
            140 => 
            array (
                'id' => 141,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-03 00:10:00',
                'end_time' => '2025-07-03 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0107 seconds, Log : ',
            ),
            141 => 
            array (
                'id' => 142,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-04 00:05:01',
                'end_time' => '2025-07-04 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0515 seconds, Log : ',
            ),
            142 => 
            array (
                'id' => 143,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-04 00:10:01',
                'end_time' => '2025-07-04 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0148 seconds, Log : ',
            ),
            143 => 
            array (
                'id' => 144,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-05 00:05:00',
                'end_time' => '2025-07-05 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0465 seconds, Log : ',
            ),
            144 => 
            array (
                'id' => 145,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-05 00:10:00',
                'end_time' => '2025-07-05 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0099 seconds, Log : ',
            ),
            145 => 
            array (
                'id' => 146,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-06 00:05:00',
                'end_time' => '2025-07-06 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0467 seconds, Log : ',
            ),
            146 => 
            array (
                'id' => 147,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-06 00:10:00',
                'end_time' => '2025-07-06 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0091 seconds, Log : ',
            ),
            147 => 
            array (
                'id' => 148,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-07 00:05:00',
                'end_time' => '2025-07-07 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0450 seconds, Log : ',
            ),
            148 => 
            array (
                'id' => 149,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-07 00:10:00',
                'end_time' => '2025-07-07 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0091 seconds, Log : ',
            ),
            149 => 
            array (
                'id' => 150,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-08 00:05:01',
                'end_time' => '2025-07-08 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0457 seconds, Log : ',
            ),
            150 => 
            array (
                'id' => 151,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-08 00:10:01',
                'end_time' => '2025-07-08 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0118 seconds, Log : ',
            ),
            151 => 
            array (
                'id' => 152,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-09 00:05:00',
                'end_time' => '2025-07-09 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0483 seconds, Log : ',
            ),
            152 => 
            array (
                'id' => 153,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-09 00:10:00',
                'end_time' => '2025-07-09 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0092 seconds, Log : ',
            ),
            153 => 
            array (
                'id' => 154,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-10 00:05:00',
                'end_time' => '2025-07-10 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0464 seconds, Log : ',
            ),
            154 => 
            array (
                'id' => 155,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-10 00:10:00',
                'end_time' => '2025-07-10 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0133 seconds, Log : ',
            ),
            155 => 
            array (
                'id' => 156,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-11 00:05:00',
                'end_time' => '2025-07-11 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0447 seconds, Log : ',
            ),
            156 => 
            array (
                'id' => 157,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-11 00:10:00',
                'end_time' => '2025-07-11 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0185 seconds, Log : ',
            ),
            157 => 
            array (
                'id' => 158,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-12 00:05:01',
                'end_time' => '2025-07-12 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0455 seconds, Log : ',
            ),
            158 => 
            array (
                'id' => 159,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-12 00:10:01',
                'end_time' => '2025-07-12 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0130 seconds, Log : ',
            ),
            159 => 
            array (
                'id' => 160,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-13 00:05:00',
                'end_time' => '2025-07-13 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0468 seconds, Log : ',
            ),
            160 => 
            array (
                'id' => 161,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-13 00:10:00',
                'end_time' => '2025-07-13 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0089 seconds, Log : ',
            ),
            161 => 
            array (
                'id' => 162,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-14 00:05:00',
                'end_time' => '2025-07-14 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0459 seconds, Log : ',
            ),
            162 => 
            array (
                'id' => 163,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-14 00:10:00',
                'end_time' => '2025-07-14 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0099 seconds, Log : ',
            ),
            163 => 
            array (
                'id' => 164,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-15 00:05:00',
                'end_time' => '2025-07-15 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0484 seconds, Log : ',
            ),
            164 => 
            array (
                'id' => 165,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-15 00:10:00',
                'end_time' => '2025-07-15 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            165 => 
            array (
                'id' => 166,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-16 00:05:01',
                'end_time' => '2025-07-16 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0669 seconds, Log : ',
            ),
            166 => 
            array (
                'id' => 167,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-16 00:10:01',
                'end_time' => '2025-07-16 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0163 seconds, Log : ',
            ),
            167 => 
            array (
                'id' => 168,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-17 00:05:00',
                'end_time' => '2025-07-17 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0519 seconds, Log : ',
            ),
            168 => 
            array (
                'id' => 169,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-17 00:10:00',
                'end_time' => '2025-07-17 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0098 seconds, Log : ',
            ),
            169 => 
            array (
                'id' => 170,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-18 00:05:00',
                'end_time' => '2025-07-18 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0481 seconds, Log : ',
            ),
            170 => 
            array (
                'id' => 171,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-18 00:10:00',
                'end_time' => '2025-07-18 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0089 seconds, Log : ',
            ),
            171 => 
            array (
                'id' => 172,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-19 00:05:00',
                'end_time' => '2025-07-19 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0448 seconds, Log : ',
            ),
            172 => 
            array (
                'id' => 173,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-19 00:10:00',
                'end_time' => '2025-07-19 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0091 seconds, Log : ',
            ),
            173 => 
            array (
                'id' => 174,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-20 00:05:01',
                'end_time' => '2025-07-20 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0479 seconds, Log : ',
            ),
            174 => 
            array (
                'id' => 175,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-20 00:10:01',
                'end_time' => '2025-07-20 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0098 seconds, Log : ',
            ),
            175 => 
            array (
                'id' => 176,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-21 00:05:00',
                'end_time' => '2025-07-21 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0481 seconds, Log : ',
            ),
            176 => 
            array (
                'id' => 177,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-21 00:10:00',
                'end_time' => '2025-07-21 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0093 seconds, Log : ',
            ),
            177 => 
            array (
                'id' => 178,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-22 00:05:00',
                'end_time' => '2025-07-22 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0472 seconds, Log : ',
            ),
            178 => 
            array (
                'id' => 179,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-22 00:10:00',
                'end_time' => '2025-07-22 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0089 seconds, Log : ',
            ),
            179 => 
            array (
                'id' => 180,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-23 00:05:00',
                'end_time' => '2025-07-23 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0507 seconds, Log : ',
            ),
            180 => 
            array (
                'id' => 181,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-23 00:10:00',
                'end_time' => '2025-07-23 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0163 seconds, Log : ',
            ),
            181 => 
            array (
                'id' => 182,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-24 00:05:00',
                'end_time' => '2025-07-24 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0522 seconds, Log : ',
            ),
            182 => 
            array (
                'id' => 183,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-24 00:10:00',
                'end_time' => '2025-07-24 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0104 seconds, Log : ',
            ),
            183 => 
            array (
                'id' => 184,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-25 00:05:01',
                'end_time' => '2025-07-25 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0456 seconds, Log : ',
            ),
            184 => 
            array (
                'id' => 185,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-25 00:10:00',
                'end_time' => '2025-07-25 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0092 seconds, Log : ',
            ),
            185 => 
            array (
                'id' => 186,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-26 00:05:00',
                'end_time' => '2025-07-26 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0476 seconds, Log : ',
            ),
            186 => 
            array (
                'id' => 187,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-26 00:10:00',
                'end_time' => '2025-07-26 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            187 => 
            array (
                'id' => 188,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-27 00:05:01',
                'end_time' => '2025-07-27 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0541 seconds, Log : ',
            ),
            188 => 
            array (
                'id' => 189,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-27 00:10:01',
                'end_time' => '2025-07-27 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            189 => 
            array (
                'id' => 190,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-28 00:05:00',
                'end_time' => '2025-07-28 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0478 seconds, Log : ',
            ),
            190 => 
            array (
                'id' => 191,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-28 00:10:00',
                'end_time' => '2025-07-28 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0085 seconds, Log : ',
            ),
            191 => 
            array (
                'id' => 192,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-29 00:05:00',
                'end_time' => '2025-07-29 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0483 seconds, Log : ',
            ),
            192 => 
            array (
                'id' => 193,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-29 00:10:00',
                'end_time' => '2025-07-29 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0088 seconds, Log : ',
            ),
            193 => 
            array (
                'id' => 194,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-30 00:05:00',
                'end_time' => '2025-07-30 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0502 seconds, Log : ',
            ),
            194 => 
            array (
                'id' => 195,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-30 00:10:00',
                'end_time' => '2025-07-30 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0089 seconds, Log : ',
            ),
            195 => 
            array (
                'id' => 196,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-31 00:05:01',
                'end_time' => '2025-07-31 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0467 seconds, Log : ',
            ),
            196 => 
            array (
                'id' => 197,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-07-31 00:10:01',
                'end_time' => '2025-07-31 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0101 seconds, Log : ',
            ),
            197 => 
            array (
                'id' => 198,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-01 00:05:00',
                'end_time' => '2025-08-01 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0739 seconds, Log : ',
            ),
            198 => 
            array (
                'id' => 199,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-01 00:10:00',
                'end_time' => '2025-08-01 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0426 seconds, Log : ',
            ),
            199 => 
            array (
                'id' => 200,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-02 00:05:00',
                'end_time' => '2025-08-02 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0503 seconds, Log : ',
            ),
            200 => 
            array (
                'id' => 201,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-02 00:10:00',
                'end_time' => '2025-08-02 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            201 => 
            array (
                'id' => 202,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-03 00:05:00',
                'end_time' => '2025-08-03 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0478 seconds, Log : ',
            ),
            202 => 
            array (
                'id' => 203,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-03 00:10:00',
                'end_time' => '2025-08-03 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0094 seconds, Log : ',
            ),
            203 => 
            array (
                'id' => 204,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-04 00:05:00',
                'end_time' => '2025-08-04 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0498 seconds, Log : ',
            ),
            204 => 
            array (
                'id' => 205,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-04 00:10:00',
                'end_time' => '2025-08-04 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0170 seconds, Log : ',
            ),
            205 => 
            array (
                'id' => 206,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-05 00:05:01',
                'end_time' => '2025-08-05 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0448 seconds, Log : ',
            ),
            206 => 
            array (
                'id' => 207,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-05 00:10:01',
                'end_time' => '2025-08-05 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0096 seconds, Log : ',
            ),
            207 => 
            array (
                'id' => 208,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-06 00:05:00',
                'end_time' => '2025-08-06 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0450 seconds, Log : ',
            ),
            208 => 
            array (
                'id' => 209,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-06 00:10:00',
                'end_time' => '2025-08-06 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0108 seconds, Log : ',
            ),
            209 => 
            array (
                'id' => 210,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-07 00:05:00',
                'end_time' => '2025-08-07 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0469 seconds, Log : ',
            ),
            210 => 
            array (
                'id' => 211,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-07 00:10:00',
                'end_time' => '2025-08-07 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0107 seconds, Log : ',
            ),
            211 => 
            array (
                'id' => 212,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-08 00:05:00',
                'end_time' => '2025-08-08 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0464 seconds, Log : ',
            ),
            212 => 
            array (
                'id' => 213,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-08 00:10:00',
                'end_time' => '2025-08-08 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0102 seconds, Log : ',
            ),
            213 => 
            array (
                'id' => 214,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-09 00:05:01',
                'end_time' => '2025-08-09 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0453 seconds, Log : ',
            ),
            214 => 
            array (
                'id' => 215,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-09 00:10:01',
                'end_time' => '2025-08-09 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            215 => 
            array (
                'id' => 216,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-10 00:05:00',
                'end_time' => '2025-08-10 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0469 seconds, Log : ',
            ),
            216 => 
            array (
                'id' => 217,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-10 00:10:00',
                'end_time' => '2025-08-10 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0095 seconds, Log : ',
            ),
            217 => 
            array (
                'id' => 218,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-11 00:05:00',
                'end_time' => '2025-08-11 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0466 seconds, Log : ',
            ),
            218 => 
            array (
                'id' => 219,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-11 00:10:00',
                'end_time' => '2025-08-11 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0090 seconds, Log : ',
            ),
            219 => 
            array (
                'id' => 220,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-12 00:05:00',
                'end_time' => '2025-08-12 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0466 seconds, Log : ',
            ),
            220 => 
            array (
                'id' => 221,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-12 00:10:00',
                'end_time' => '2025-08-12 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0089 seconds, Log : ',
            ),
            221 => 
            array (
                'id' => 222,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-13 00:05:01',
                'end_time' => '2025-08-13 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0496 seconds, Log : ',
            ),
            222 => 
            array (
                'id' => 223,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-13 00:10:01',
                'end_time' => '2025-08-13 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            223 => 
            array (
                'id' => 224,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-14 00:05:00',
                'end_time' => '2025-08-14 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0506 seconds, Log : ',
            ),
            224 => 
            array (
                'id' => 225,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-14 00:10:00',
                'end_time' => '2025-08-14 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0099 seconds, Log : ',
            ),
            225 => 
            array (
                'id' => 226,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-15 00:05:00',
                'end_time' => '2025-08-15 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0488 seconds, Log : ',
            ),
            226 => 
            array (
                'id' => 227,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-15 00:10:00',
                'end_time' => '2025-08-15 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0095 seconds, Log : ',
            ),
            227 => 
            array (
                'id' => 228,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-16 00:05:00',
                'end_time' => '2025-08-16 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0476 seconds, Log : ',
            ),
            228 => 
            array (
                'id' => 229,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-16 00:10:00',
                'end_time' => '2025-08-16 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0171 seconds, Log : ',
            ),
            229 => 
            array (
                'id' => 230,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-17 00:05:01',
                'end_time' => '2025-08-17 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0530 seconds, Log : ',
            ),
            230 => 
            array (
                'id' => 231,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-17 00:10:01',
                'end_time' => '2025-08-17 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0116 seconds, Log : ',
            ),
            231 => 
            array (
                'id' => 232,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-18 00:05:00',
                'end_time' => '2025-08-18 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0452 seconds, Log : ',
            ),
            232 => 
            array (
                'id' => 233,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-18 00:10:00',
                'end_time' => '2025-08-18 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0090 seconds, Log : ',
            ),
            233 => 
            array (
                'id' => 234,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-19 00:05:00',
                'end_time' => '2025-08-19 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0499 seconds, Log : ',
            ),
            234 => 
            array (
                'id' => 235,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-19 00:10:00',
                'end_time' => '2025-08-19 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0097 seconds, Log : ',
            ),
            235 => 
            array (
                'id' => 236,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-20 00:05:00',
                'end_time' => '2025-08-20 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0458 seconds, Log : ',
            ),
            236 => 
            array (
                'id' => 237,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-20 00:10:00',
                'end_time' => '2025-08-20 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0106 seconds, Log : ',
            ),
            237 => 
            array (
                'id' => 238,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-21 00:05:01',
                'end_time' => '2025-08-21 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0603 seconds, Log : ',
            ),
            238 => 
            array (
                'id' => 239,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-21 00:10:01',
                'end_time' => '2025-08-21 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0100 seconds, Log : ',
            ),
            239 => 
            array (
                'id' => 240,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-22 00:05:00',
                'end_time' => '2025-08-22 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0529 seconds, Log : ',
            ),
            240 => 
            array (
                'id' => 241,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-22 00:10:00',
                'end_time' => '2025-08-22 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0222 seconds, Log : ',
            ),
            241 => 
            array (
                'id' => 242,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-23 00:05:00',
                'end_time' => '2025-08-23 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0462 seconds, Log : ',
            ),
            242 => 
            array (
                'id' => 243,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-23 00:10:00',
                'end_time' => '2025-08-23 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0343 seconds, Log : ',
            ),
            243 => 
            array (
                'id' => 244,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-24 00:05:00',
                'end_time' => '2025-08-24 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0450 seconds, Log : ',
            ),
            244 => 
            array (
                'id' => 245,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-24 00:10:00',
                'end_time' => '2025-08-24 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0118 seconds, Log : ',
            ),
            245 => 
            array (
                'id' => 246,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-25 00:05:01',
                'end_time' => '2025-08-25 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0579 seconds, Log : ',
            ),
            246 => 
            array (
                'id' => 247,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-25 00:10:01',
                'end_time' => '2025-08-25 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0121 seconds, Log : ',
            ),
            247 => 
            array (
                'id' => 248,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-26 00:05:00',
                'end_time' => '2025-08-26 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0487 seconds, Log : ',
            ),
            248 => 
            array (
                'id' => 249,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-26 00:10:00',
                'end_time' => '2025-08-26 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0115 seconds, Log : ',
            ),
            249 => 
            array (
                'id' => 250,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-27 00:05:00',
                'end_time' => '2025-08-27 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0449 seconds, Log : ',
            ),
            250 => 
            array (
                'id' => 251,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-27 00:10:00',
                'end_time' => '2025-08-27 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0118 seconds, Log : ',
            ),
            251 => 
            array (
                'id' => 252,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-28 00:05:00',
                'end_time' => '2025-08-28 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0523 seconds, Log : ',
            ),
            252 => 
            array (
                'id' => 253,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-28 00:10:00',
                'end_time' => '2025-08-28 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0115 seconds, Log : ',
            ),
            253 => 
            array (
                'id' => 254,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-29 00:05:01',
                'end_time' => '2025-08-29 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0481 seconds, Log : ',
            ),
            254 => 
            array (
                'id' => 255,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-29 00:10:01',
                'end_time' => '2025-08-29 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0122 seconds, Log : ',
            ),
            255 => 
            array (
                'id' => 256,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-30 00:05:00',
                'end_time' => '2025-08-30 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0448 seconds, Log : ',
            ),
            256 => 
            array (
                'id' => 257,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-30 00:10:00',
                'end_time' => '2025-08-30 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0114 seconds, Log : ',
            ),
            257 => 
            array (
                'id' => 258,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-31 00:05:00',
                'end_time' => '2025-08-31 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0508 seconds, Log : ',
            ),
            258 => 
            array (
                'id' => 259,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-08-31 00:10:00',
                'end_time' => '2025-08-31 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0121 seconds, Log : ',
            ),
            259 => 
            array (
                'id' => 260,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-01 00:05:00',
                'end_time' => '2025-09-01 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0464 seconds, Log : ',
            ),
            260 => 
            array (
                'id' => 261,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-01 00:10:00',
                'end_time' => '2025-09-01 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0117 seconds, Log : ',
            ),
            261 => 
            array (
                'id' => 262,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-02 00:05:01',
                'end_time' => '2025-09-02 00:05:01',
                'log_desc' => 'Elapsed Time : 0.0486 seconds, Log : ',
            ),
            262 => 
            array (
                'id' => 263,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-02 00:10:01',
                'end_time' => '2025-09-02 00:10:01',
                'log_desc' => 'Elapsed Time : 0.0257 seconds, Log : ',
            ),
            263 => 
            array (
                'id' => 264,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-03 00:05:00',
                'end_time' => '2025-09-03 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0472 seconds, Log : ',
            ),
            264 => 
            array (
                'id' => 265,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-03 00:10:00',
                'end_time' => '2025-09-03 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0138 seconds, Log : ',
            ),
            265 => 
            array (
                'id' => 266,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-04 00:05:00',
                'end_time' => '2025-09-04 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0504 seconds, Log : ',
            ),
            266 => 
            array (
                'id' => 267,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-04 00:10:00',
                'end_time' => '2025-09-04 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0252 seconds, Log : ',
            ),
            267 => 
            array (
                'id' => 268,
                'cron_name' => 'Rank',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-05 00:05:00',
                'end_time' => '2025-09-05 00:05:00',
                'log_desc' => 'Elapsed Time : 0.0446 seconds, Log : ',
            ),
            268 => 
            array (
                'id' => 269,
                'cron_name' => 'Withdraw',
                'status' => 'SUCCESS',
                'start_time' => '2025-09-05 00:10:00',
                'end_time' => '2025-09-05 00:10:00',
                'log_desc' => 'Elapsed Time : 0.0118 seconds, Log : ',
            ),
        ));
        
        
    }
}