<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_province')->delete();
        
        \DB::table('jpb_province')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area_id' => 2,
                'province_name' => 'Bali',
                'province_code' => 'A',
                'id_express' => 28,
            ),
            1 => 
            array (
                'id' => 2,
                'area_id' => 2,
                'province_name' => 'Bangka Belitung',
                'province_code' => 'B',
                'id_express' => 10,
            ),
            2 => 
            array (
                'id' => 3,
                'area_id' => 1,
                'province_name' => 'Banten',
                'province_code' => 'C',
                'id_express' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'area_id' => 2,
                'province_name' => 'Bengkulu',
                'province_code' => 'D',
                'id_express' => 7,
            ),
            4 => 
            array (
                'id' => 5,
                'area_id' => 1,
                'province_name' => 'DI Yogyakarta',
                'province_code' => 'E',
                'id_express' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'area_id' => 1,
                'province_name' => 'DKI Jakarta',
                'province_code' => 'F',
                'id_express' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'area_id' => 3,
                'province_name' => 'Gorontalo',
                'province_code' => 'G',
                'id_express' => 22,
            ),
            7 => 
            array (
                'id' => 8,
                'area_id' => 2,
                'province_name' => 'Jambi',
                'province_code' => 'H',
                'id_express' => 9,
            ),
            8 => 
            array (
                'id' => 9,
                'area_id' => 1,
                'province_name' => 'Jawa Barat',
                'province_code' => 'I',
                'id_express' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'area_id' => 1,
                'province_name' => 'Jawa Tengah',
                'province_code' => 'J',
                'id_express' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'area_id' => 1,
                'province_name' => 'Jawa Timur',
                'province_code' => 'K',
                'id_express' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'area_id' => 2,
                'province_name' => 'Kalimantan Barat',
                'province_code' => 'L',
                'id_express' => 17,
            ),
            12 => 
            array (
                'id' => 13,
                'area_id' => 2,
                'province_name' => 'Kalimantan Selatan',
                'province_code' => 'M',
                'id_express' => 18,
            ),
            13 => 
            array (
                'id' => 14,
                'area_id' => 2,
                'province_name' => 'Kalimantan Tengah',
                'province_code' => 'N',
                'id_express' => 19,
            ),
            14 => 
            array (
                'id' => 15,
                'area_id' => 2,
                'province_name' => 'Kalimantan Timur',
                'province_code' => 'O',
                'id_express' => 20,
            ),
            15 => 
            array (
                'id' => 16,
                'area_id' => 2,
                'province_name' => 'Kalimantan Utara',
                'province_code' => 'P',
                'id_express' => 21,
            ),
            16 => 
            array (
                'id' => 17,
                'area_id' => 2,
                'province_name' => 'Kepulauan Riau',
                'province_code' => 'Q',
                'id_express' => 11,
            ),
            17 => 
            array (
                'id' => 18,
                'area_id' => 2,
                'province_name' => 'Lampung',
                'province_code' => 'R',
                'id_express' => 12,
            ),
            18 => 
            array (
                'id' => 19,
                'area_id' => 3,
                'province_name' => 'Maluku',
                'province_code' => 'S',
                'id_express' => 31,
            ),
            19 => 
            array (
                'id' => 20,
                'area_id' => 3,
                'province_name' => 'Maluku Utara',
                'province_code' => 'T',
                'id_express' => 32,
            ),
            20 => 
            array (
                'id' => 21,
                'area_id' => 2,
            'province_name' => 'Nanggroe Aceh Darussalam (NAD)',
                'province_code' => 'U',
                'id_express' => 8,
            ),
            21 => 
            array (
                'id' => 22,
                'area_id' => 2,
            'province_name' => 'Nusa Tenggara Barat (NTB)',
                'province_code' => 'V',
                'id_express' => 29,
            ),
            22 => 
            array (
                'id' => 23,
                'area_id' => 2,
            'province_name' => 'Nusa Tenggara Timur (NTT)',
                'province_code' => 'W',
                'id_express' => 30,
            ),
            23 => 
            array (
                'id' => 24,
                'area_id' => 4,
                'province_name' => 'Papua',
                'province_code' => 'X',
                'id_express' => 33,
            ),
            24 => 
            array (
                'id' => 25,
                'area_id' => 4,
                'province_name' => 'Papua Barat',
                'province_code' => 'Y',
                'id_express' => 34,
            ),
            25 => 
            array (
                'id' => 26,
                'area_id' => 2,
                'province_name' => 'Riau',
                'province_code' => 'Z',
                'id_express' => 13,
            ),
            26 => 
            array (
                'id' => 27,
                'area_id' => 3,
                'province_name' => 'Sulawesi Barat',
                'province_code' => '0',
                'id_express' => 23,
            ),
            27 => 
            array (
                'id' => 28,
                'area_id' => 3,
                'province_name' => 'Sulawesi Selatan',
                'province_code' => '1',
                'id_express' => 24,
            ),
            28 => 
            array (
                'id' => 29,
                'area_id' => 3,
                'province_name' => 'Sulawesi Tengah',
                'province_code' => '2',
                'id_express' => 25,
            ),
            29 => 
            array (
                'id' => 30,
                'area_id' => 3,
                'province_name' => 'Sulawesi Tenggara',
                'province_code' => '3',
                'id_express' => 26,
            ),
            30 => 
            array (
                'id' => 31,
                'area_id' => 3,
                'province_name' => 'Sulawesi Utara',
                'province_code' => '4',
                'id_express' => 27,
            ),
            31 => 
            array (
                'id' => 32,
                'area_id' => 2,
                'province_name' => 'Sumatera Barat',
                'province_code' => '5',
                'id_express' => 14,
            ),
            32 => 
            array (
                'id' => 33,
                'area_id' => 2,
                'province_name' => 'Sumatera Selatan',
                'province_code' => '6',
                'id_express' => 15,
            ),
            33 => 
            array (
                'id' => 34,
                'area_id' => 2,
                'province_name' => 'Sumatera Utara',
                'province_code' => '7',
                'id_express' => 16,
            ),
        ));
        
        
    }
}