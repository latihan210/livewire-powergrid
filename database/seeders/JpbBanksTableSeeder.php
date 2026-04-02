<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbBanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_banks')->delete();
        
        \DB::table('jpb_banks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'BCA',
                'kode' => '014',
                'type' => 'bank',
                'flipcode' => 'bca',
                'espaycode' => '014',
                'linkitacode' => '014',
                'logo' => 'dhaassets/backend/img/bank/bca.png',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'BNI',
                'kode' => '009',
                'type' => 'bank',
                'flipcode' => 'bni',
                'espaycode' => '009',
                'linkitacode' => '009',
                'logo' => 'dhaassets/backend/img/bank/bni.png',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'BRI',
                'kode' => '002',
                'type' => 'bank',
                'flipcode' => 'bri',
                'espaycode' => '002',
                'linkitacode' => '002',
                'logo' => 'dhaassets/backend/img/bank/briva.png',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Mandiri',
                'kode' => '008',
                'type' => 'bank',
                'flipcode' => 'mandiri',
                'espaycode' => '008',
                'linkitacode' => '008',
                'logo' => 'dhaassets/backend/img/bank/mandiri.png',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'BSI',
                'kode' => '451',
                'type' => 'bank',
                'flipcode' => 'bsm',
                'espaycode' => NULL,
                'linkitacode' => '451',
                'logo' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'CIMB Niaga',
                'kode' => '022',
                'type' => 'bank',
                'flipcode' => 'cimb',
                'espaycode' => '022',
                'linkitacode' => '022',
                'logo' => 'dhaassets/backend/img/bank/cimb.png',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'CIMB Niaga Syariah',
                'kode' => '022',
                'type' => 'bank',
                'flipcode' => 'cimb',
                'espaycode' => NULL,
                'linkitacode' => '022',
                'logo' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Muamalat',
                'kode' => '147',
                'type' => 'bank',
                'flipcode' => 'muamalat',
                'espaycode' => NULL,
                'linkitacode' => '147',
                'logo' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'BRI Syariah',
                'kode' => '422',
                'type' => 'bank',
                'flipcode' => 'bri_syr',
                'espaycode' => NULL,
                'linkitacode' => '422',
                'logo' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'BTN',
                'kode' => '200',
                'type' => 'bank',
                'flipcode' => 'btn',
                'espaycode' => NULL,
                'linkitacode' => '200',
                'logo' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'Permata Bank',
                'kode' => '013',
                'type' => 'bank',
                'flipcode' => 'permata',
                'espaycode' => '013',
                'linkitacode' => '013',
                'logo' => 'dhaassets/backend/img/bank/permata.png',
            ),
            11 => 
            array (
                'id' => 12,
                'nama' => 'Danamon',
                'kode' => '011',
                'type' => 'bank',
                'flipcode' => 'danamon',
                'espaycode' => NULL,
                'linkitacode' => '011',
                'logo' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nama' => 'BII Maybank',
                'kode' => '016',
                'type' => 'bank',
                'flipcode' => 'bii',
                'espaycode' => NULL,
                'linkitacode' => '016',
                'logo' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nama' => 'Mega',
                'kode' => '426',
                'type' => 'bank',
                'flipcode' => 'mega',
                'espaycode' => NULL,
                'linkitacode' => '426',
                'logo' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nama' => 'Sinarmas',
                'kode' => '153',
                'type' => 'bank',
                'flipcode' => 'sinarmas',
                'espaycode' => NULL,
                'linkitacode' => '153',
                'logo' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nama' => 'OCBC NISP',
                'kode' => '028',
                'type' => 'bank',
                'flipcode' => 'ocbc',
                'espaycode' => NULL,
                'linkitacode' => '028',
                'logo' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nama' => 'Bukopin',
                'kode' => '441',
                'type' => 'bank',
                'flipcode' => 'bukopin',
                'espaycode' => NULL,
                'linkitacode' => '441',
                'logo' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nama' => 'BCA Syariah',
                'kode' => '536',
                'type' => 'bank',
                'flipcode' => 'bca_syr',
                'espaycode' => NULL,
                'linkitacode' => '536',
                'logo' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nama' => 'Lippo',
                'kode' => '026',
                'type' => 'bank',
                'flipcode' => '',
                'espaycode' => NULL,
                'linkitacode' => '026',
                'logo' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nama' => 'Citibank',
                'kode' => '031',
                'type' => 'bank',
                'flipcode' => 'citibank',
                'espaycode' => NULL,
                'linkitacode' => '031',
                'logo' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nama' => 'BTPN',
                'kode' => '213',
                'type' => 'bank',
                'flipcode' => 'tabungan_pensiunan_nasional',
                'espaycode' => NULL,
                'linkitacode' => '213',
                'logo' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
            'nama' => 'BPD Jabar Banten (BJB)',
                'kode' => '110',
                'type' => 'bank',
                'flipcode' => 'bjb',
                'espaycode' => NULL,
                'linkitacode' => '110',
                'logo' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'nama' => 'Bank DKI',
                'kode' => '111',
                'type' => 'bank',
                'flipcode' => 'dki',
                'espaycode' => NULL,
                'linkitacode' => '111',
                'logo' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'nama' => 'BPD DIY',
                'kode' => '112',
                'type' => 'bank',
                'flipcode' => 'daerah_istimewa',
                'espaycode' => NULL,
                'linkitacode' => '112',
                'logo' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'nama' => 'BPD Jateng',
                'kode' => '113',
                'type' => 'bank',
                'flipcode' => 'jawa_tengah',
                'espaycode' => NULL,
                'linkitacode' => '113',
                'logo' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'nama' => 'BPD Jatim',
                'kode' => '114',
                'type' => 'bank',
                'flipcode' => 'jawa_timur',
                'espaycode' => NULL,
                'linkitacode' => '114',
                'logo' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'nama' => 'BPD Jambi',
                'kode' => '115',
                'type' => 'bank',
                'flipcode' => 'jambi',
                'espaycode' => NULL,
                'linkitacode' => '115',
                'logo' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'nama' => 'BPD Aceh',
                'kode' => '116',
                'type' => 'bank',
                'flipcode' => '',
                'espaycode' => NULL,
                'linkitacode' => '116',
                'logo' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'nama' => 'BPD Sumut',
                'kode' => '117',
                'type' => 'bank',
                'flipcode' => 'sumut',
                'espaycode' => NULL,
                'linkitacode' => '117',
                'logo' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
            'nama' => 'Bank Nagari (BPD Sumbar)',
                'kode' => '118',
                'type' => 'bank',
                'flipcode' => 'sumatera_barat',
                'espaycode' => NULL,
                'linkitacode' => '118',
                'logo' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'nama' => 'BPD Riau Kepri',
                'kode' => '119',
                'type' => 'bank',
                'flipcode' => 'riau_dan_kepri',
                'espaycode' => NULL,
                'linkitacode' => '119',
                'logo' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'nama' => 'BPD Sumsel Babel',
                'kode' => '120',
                'type' => 'bank',
                'flipcode' => 'sumsel_dan_babel',
                'espaycode' => NULL,
                'linkitacode' => '120',
                'logo' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'nama' => 'BPD Lampung',
                'kode' => '121',
                'type' => 'bank',
                'flipcode' => 'lampung',
                'espaycode' => NULL,
                'linkitacode' => '121',
                'logo' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'nama' => 'BPD Kalsel',
                'kode' => '122',
                'type' => 'bank',
                'flipcode' => 'kalimantan_selatan',
                'espaycode' => NULL,
                'linkitacode' => '122',
                'logo' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'nama' => 'BPD Kalimantan Barat',
                'kode' => '123',
                'type' => 'bank',
                'flipcode' => 'kalimantan_barat',
                'espaycode' => NULL,
                'linkitacode' => '123',
                'logo' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'nama' => 'BPD Kaltim',
                'kode' => '124',
                'type' => 'bank',
                'flipcode' => 'kalimantan_timur',
                'espaycode' => NULL,
                'linkitacode' => '124',
                'logo' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'nama' => 'BPD Kalteng',
                'kode' => '125',
                'type' => 'bank',
                'flipcode' => 'kalimantan_tengah',
                'espaycode' => NULL,
                'linkitacode' => '125',
                'logo' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'nama' => 'BPD Sulselbar',
                'kode' => '126',
                'type' => 'bank',
                'flipcode' => 'sulselbar',
                'espaycode' => NULL,
                'linkitacode' => '126',
                'logo' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'nama' => 'Bank Sulut',
                'kode' => '127',
                'type' => 'bank',
                'flipcode' => 'sulut',
                'espaycode' => NULL,
                'linkitacode' => '127',
                'logo' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nama' => 'BPD NTB',
                'kode' => '128',
                'type' => 'bank',
                'flipcode' => 'nusa_tenggara_barat',
                'espaycode' => NULL,
                'linkitacode' => '128',
                'logo' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'nama' => 'BPD Bali',
                'kode' => '129',
                'type' => 'bank',
                'flipcode' => 'bali',
                'espaycode' => NULL,
                'linkitacode' => '129',
                'logo' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'nama' => 'BPD NTT',
                'kode' => '130',
                'type' => 'bank',
                'flipcode' => 'nusa_tenggara_timur',
                'espaycode' => NULL,
                'linkitacode' => '130',
                'logo' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'nama' => 'BPD Maluku',
                'kode' => '131',
                'type' => 'bank',
                'flipcode' => 'maluku',
                'espaycode' => NULL,
                'linkitacode' => '131',
                'logo' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'nama' => 'BPD Papua',
                'kode' => '132',
                'type' => 'bank',
                'flipcode' => 'papua',
                'espaycode' => NULL,
                'linkitacode' => '132',
                'logo' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'nama' => 'BPD Bengkulu',
                'kode' => '133',
                'type' => 'bank',
                'flipcode' => 'bengkulu',
                'espaycode' => NULL,
                'linkitacode' => '133',
                'logo' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'nama' => 'BPD Sulawesi Tengah',
                'kode' => '134',
                'type' => 'bank',
                'flipcode' => 'sulawesi',
                'espaycode' => NULL,
                'linkitacode' => '134',
                'logo' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'nama' => 'BPD Sultra',
                'kode' => '135',
                'type' => 'bank',
                'flipcode' => 'sulawesi_tenggara',
                'espaycode' => NULL,
                'linkitacode' => '135',
                'logo' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'nama' => 'Panin Bank',
                'kode' => '019',
                'type' => 'bank',
                'flipcode' => 'panin',
                'espaycode' => NULL,
                'linkitacode' => '019',
                'logo' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'nama' => 'DBS Indonesia',
                'kode' => '046',
                'type' => 'bank',
                'flipcode' => 'dbs',
                'espaycode' => NULL,
                'linkitacode' => '046',
                'logo' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'nama' => 'Bank Victoria',
                'kode' => '566',
                'type' => 'bank',
                'flipcode' => 'victoria_internasional',
                'espaycode' => NULL,
                'linkitacode' => '566',
                'logo' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'nama' => 'Bank BJB Syariah',
                'kode' => '425',
                'type' => 'bank',
                'flipcode' => 'bjb_syr',
                'espaycode' => NULL,
                'linkitacode' => '425',
                'logo' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'nama' => 'BNI Syariah',
                'kode' => '427',
                'type' => 'bank',
                'flipcode' => 'bni',
                'espaycode' => NULL,
                'linkitacode' => '427',
                'logo' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
            'nama' => 'Bank National Nobu (BANK ALFINDO)',
                'kode' => '503',
                'type' => 'bank',
                'flipcode' => 'nationalnobu',
                'espaycode' => NULL,
                'linkitacode' => '503',
                'logo' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'nama' => 'Artha Graha International',
                'kode' => '037',
                'type' => 'bank',
                'flipcode' => 'artha',
                'espaycode' => NULL,
                'linkitacode' => '037',
                'logo' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
            'nama' => 'SeaBank (BKE)',
                'kode' => '535',
                'type' => 'bank',
                'flipcode' => 'kesejahteraan_ekonomi',
                'espaycode' => NULL,
                'linkitacode' => '535',
                'logo' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'nama' => 'DANA',
                'kode' => '991',
                'type' => 'emoney',
                'flipcode' => 'dana',
                'espaycode' => NULL,
                'linkitacode' => 'dana',
                'logo' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'nama' => 'OVO',
                'kode' => '992',
                'type' => 'emoney',
                'flipcode' => 'ovo',
                'espaycode' => NULL,
                'linkitacode' => 'ovo',
                'logo' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'nama' => 'GOPAY',
                'kode' => '993',
                'type' => 'emoney',
                'flipcode' => 'gopay',
                'espaycode' => NULL,
                'linkitacode' => 'gopay',
                'logo' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'nama' => 'Bank Jago Syariah',
                'kode' => '542',
                'type' => 'bank',
                'flipcode' => 'artos_syr',
                'espaycode' => NULL,
                'linkitacode' => '542',
                'logo' => NULL,
            ),
        ));
        
        
    }
}