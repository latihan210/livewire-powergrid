<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_options')->delete();
        
        \DB::table('jpb_options')->insert(array (
            0 => 
            array (
                'id_option' => 1,
                'name' => 'company_name',
                'value' => 'JP Buana',
            ),
            1 => 
            array (
                'id_option' => 2,
                'name' => 'company_phone',
                'value' => '+628123456789',
            ),
            2 => 
            array (
                'id_option' => 3,
                'name' => 'company_email',
                'value' => 'admin@jpbuana.com',
            ),
            3 => 
            array (
                'id_option' => 4,
                'name' => 'company_province',
                'value' => '6',
            ),
            4 => 
            array (
                'id_option' => 5,
                'name' => 'company_city',
                'value' => '151',
            ),
            5 => 
            array (
                'id_option' => 6,
                'name' => 'company_address',
                'value' => 'Cluster Citra 2, Blok K3 no.9',
            ),
            6 => 
            array (
                'id_option' => 7,
                'name' => 'company_bank',
                'value' => '1',
            ),
            7 => 
            array (
                'id_option' => 8,
                'name' => 'company_bill',
                'value' => '1000000000',
            ),
            8 => 
            array (
                'id_option' => 9,
                'name' => 'company_bill_name',
                'value' => 'JP Buana',
            ),
            9 => 
            array (
                'id_option' => 10,
                'name' => 'register_fee',
                'value' => '0',
            ),
            10 => 
            array (
                'id_option' => 11,
                'name' => 'mail_sender_admin',
                'value' => 'no-reply@starasukses.co.id',
            ),
            11 => 
            array (
                'id_option' => 15,
                'name' => 'qty_package_free_shipping',
                'value' => '0',
            ),
            12 => 
            array (
                'id_option' => 16,
                'name' => 'unique_number',
                'value' => '0',
            ),
            13 => 
            array (
                'id_option' => 17,
                'name' => 'unique_number_invoice',
                'value' => '281',
            ),
            14 => 
            array (
                'id_option' => 18,
                'name' => 'unique_number_activation_invoice',
                'value' => '711',
            ),
            15 => 
            array (
                'id_option' => 19,
                'name' => 'unique_number_ro_invoice',
                'value' => '1312',
            ),
            16 => 
            array (
                'id_option' => 20,
                'name' => 'unique_number_shop_order',
                'value' => '405',
            ),
            17 => 
            array (
                'id_option' => 21,
                'name' => 'unique_number_topup_saldo',
                'value' => '0',
            ),
            18 => 
            array (
                'id_option' => 22,
                'name' => 'unique_number_voucher_code',
                'value' => '0',
            ),
            19 => 
            array (
                'id_option' => 23,
                'name' => 'global_password',
                'value' => '123456',
            ),
            20 => 
            array (
                'id_option' => 24,
                'name' => 'global_limit',
                'value' => '25',
            ),
            21 => 
            array (
                'id_option' => 25,
                'name' => 'blacklist',
                'value' => '',
            ),
            22 => 
            array (
                'id_option' => 26,
                'name' => 'facebook_link',
                'value' => 'https://www.facebook.com/',
            ),
            23 => 
            array (
                'id_option' => 27,
                'name' => 'twitter_link',
                'value' => 'https://www.twitter.com/',
            ),
            24 => 
            array (
                'id_option' => 28,
                'name' => 'googleplus_link',
                'value' => 'https://plus.google.com/',
            ),
            25 => 
            array (
                'id_option' => 30,
                'name' => 'comingsoon_time',
                'value' => '01 September 2024 12:00:00',
            ),
            26 => 
            array (
                'id_option' => 31,
                'name' => 'be_dashboard_member',
                'value' => '',
            ),
            27 => 
            array (
                'id_option' => 32,
                'name' => 'setting_mining_machine',
                'value' => '0',
            ),
            28 => 
            array (
                'id_option' => 33,
                'name' => 'setting_mining_slot',
                'value' => '0',
            ),
            29 => 
            array (
                'id_option' => 34,
                'name' => 'setting_price_slot',
                'value' => '0',
            ),
            30 => 
            array (
                'id_option' => 40,
                'name' => 'setting_withdraw_minimal',
                'value' => '50000',
            ),
            31 => 
            array (
                'id_option' => 41,
                'name' => 'setting_withdraw_manual',
                'value' => '100000',
            ),
            32 => 
            array (
                'id_option' => 42,
                'name' => 'setting_withdraw_fee',
                'value' => '5000',
            ),
            33 => 
            array (
                'id_option' => 43,
                'name' => 'setting_autoro',
                'value' => '20',
            ),
            34 => 
            array (
                'id_option' => 44,
                'name' => 'setting_autoro_max',
                'value' => '3300000',
            ),
            35 => 
            array (
                'id_option' => 45,
                'name' => 'setting_withdraw_voucher_product',
                'value' => '0',
            ),
            36 => 
            array (
                'id_option' => 46,
                'name' => 'setting_withdraw_support_system',
                'value' => '0',
            ),
            37 => 
            array (
                'id_option' => 47,
                'name' => 'setting_withdraw_tax',
                'value' => '0',
            ),
            38 => 
            array (
                'id_option' => 48,
                'name' => 'setting_withdraw_tax_non_npwp',
                'value' => '',
            ),
            39 => 
            array (
                'id_option' => 51,
                'name' => 'wanotif_active',
                'value' => '0',
            ),
            40 => 
            array (
                'id_option' => 52,
                'name' => 'wanotif_token',
                'value' => '',
            ),
            41 => 
            array (
                'id_option' => 53,
                'name' => 'wanotif_license',
                'value' => '',
            ),
            42 => 
            array (
                'id_option' => 54,
                'name' => 'flip_active',
                'value' => '0',
            ),
            43 => 
            array (
                'id_option' => 55,
                'name' => 'flip_token',
                'value' => NULL,
            ),
            44 => 
            array (
                'id_option' => 56,
                'name' => 'flip_secret',
                'value' => NULL,
            ),
            45 => 
            array (
                'id_option' => 57,
                'name' => 'activation_fee',
                'value' => '0',
            ),
            46 => 
            array (
                'id_option' => 58,
                'name' => 'transfer_fee',
                'value' => '0',
            ),
            47 => 
            array (
                'id_option' => 59,
                'name' => 'unique_number_invoice_po',
                'value' => '4',
            ),
            48 => 
            array (
                'id_option' => 60,
                'name' => 'unique_ref_number_po',
                'value' => '5',
            ),
            49 => 
            array (
                'id_option' => 61,
                'name' => 'unique_ref_number_pd',
                'value' => '1',
            ),
            50 => 
            array (
                'id_option' => 62,
                'name' => 'unique_ref_number_sa',
                'value' => '1',
            ),
            51 => 
            array (
                'id_option' => 63,
                'name' => 'shipping_province',
                'value' => '6',
            ),
            52 => 
            array (
                'id_option' => 64,
                'name' => 'shipping_city',
                'value' => '151',
            ),
            53 => 
            array (
                'id_option' => 65,
                'name' => 'shipping_subdistrict',
                'value' => '2089',
            ),
            54 => 
            array (
                'id_option' => 66,
                'name' => 'shipping_village',
                'value' => 'Kalideres',
            ),
            55 => 
            array (
                'id_option' => 67,
                'name' => 'shipping_address',
                'value' => 'Cluster Citra 2 Blok K no.8',
            ),
            56 => 
            array (
                'id_option' => 68,
                'name' => 'shipping_postcode',
                'value' => '11840',
            ),
            57 => 
            array (
                'id_option' => 69,
                'name' => 'stockist_mininum_order',
                'value' => '7500000',
            ),
            58 => 
            array (
                'id_option' => 70,
                'name' => 'stockist_mininum_first_order',
                'value' => '7500000',
            ),
            59 => 
            array (
                'id_option' => 71,
                'name' => 'stockist_free_shipping',
                'value' => '0',
            ),
            60 => 
            array (
                'id_option' => 72,
                'name' => 'mobile_free_shipping',
                'value' => '0',
            ),
            61 => 
            array (
                'id_option' => 73,
                'name' => 'mobile_mininum_order',
                'value' => '7500000',
            ),
            62 => 
            array (
                'id_option' => 74,
                'name' => 'mobile_mininum_first_order',
                'value' => '7500000',
            ),
            63 => 
            array (
                'id_option' => 75,
                'name' => 'budget_sponsor',
                'value' => '100000000',
            ),
            64 => 
            array (
                'id_option' => 76,
                'name' => 'budget_pairing_1',
                'value' => '100000000',
            ),
            65 => 
            array (
                'id_option' => 77,
                'name' => 'budget_pairing_2',
                'value' => '100000000',
            ),
            66 => 
            array (
                'id_option' => 78,
                'name' => 'budget_reward',
                'value' => '500000000',
            ),
            67 => 
            array (
                'id_option' => 79,
                'name' => 'kurs_sponsor',
                'value' => '500000',
            ),
            68 => 
            array (
                'id_option' => 80,
                'name' => 'kurs_pairing',
                'value' => '500000',
            ),
            69 => 
            array (
                'id_option' => 81,
                'name' => 'kurs_ro',
                'value' => '500000',
            ),
            70 => 
            array (
                'id_option' => 82,
                'name' => 'bonus_sponsor_percent',
                'value' => '10',
            ),
            71 => 
            array (
                'id_option' => 83,
                'name' => 'bonus_pairing_1_percent',
                'value' => '10',
            ),
            72 => 
            array (
                'id_option' => 84,
                'name' => 'bonus_pairing_2_percent',
                'value' => '2',
            ),
            73 => 
            array (
                'id_option' => 85,
                'name' => 'bonus_ro_percent',
                'value' => '10',
            ),
            74 => 
            array (
                'id_option' => 86,
                'name' => 'fee_stockist_percent',
                'value' => '2',
            ),
            75 => 
            array (
                'id_option' => 87,
                'name' => 'fee_master_stockist_percent',
                'value' => '4',
            ),
            76 => 
            array (
                'id_option' => 88,
                'name' => 'budget_sponsor_percent',
                'value' => '10',
            ),
            77 => 
            array (
                'id_option' => 89,
                'name' => 'budget_pairing_1_percent',
                'value' => '31.25',
            ),
            78 => 
            array (
                'id_option' => 90,
                'name' => 'budget_pairing_2_percent',
                'value' => '12.86',
            ),
            79 => 
            array (
                'id_option' => 91,
                'name' => 'budget_stockist_percent',
                'value' => '5.9',
            ),
            80 => 
            array (
                'id_option' => 92,
                'name' => 'budget_cashback_percent',
                'value' => '10',
            ),
            81 => 
            array (
                'id_option' => 93,
                'name' => 'budget_reward_percent',
                'value' => '37.67',
            ),
            82 => 
            array (
                'id_option' => 94,
                'name' => 'budget_promo_percent',
                'value' => '6.43',
            ),
            83 => 
            array (
                'id_option' => 95,
                'name' => 'budget_stockist_ro_percent',
                'value' => '5.9',
            ),
            84 => 
            array (
                'id_option' => 96,
                'name' => 'reward_point_siklus_1_percent',
                'value' => '100',
            ),
            85 => 
            array (
                'id_option' => 97,
                'name' => 'reward_point_siklus_2_percent',
                'value' => '80',
            ),
            86 => 
            array (
                'id_option' => 98,
                'name' => 'reward_point_siklus_3_percent',
                'value' => '50',
            ),
            87 => 
            array (
                'id_option' => 99,
                'name' => 'reward_index_siklus_1_percent',
                'value' => '70',
            ),
            88 => 
            array (
                'id_option' => 100,
                'name' => 'reward_index_siklus_2_percent',
                'value' => '20',
            ),
            89 => 
            array (
                'id_option' => 101,
                'name' => 'reward_index_siklus_3_percent',
                'value' => '10',
            ),
            90 => 
            array (
                'id_option' => 102,
                'name' => 'insurance_percent',
                'value' => '0.3',
            ),
            91 => 
            array (
                'id_option' => 103,
                'name' => 'handling_fee',
                'value' => '0',
            ),
            92 => 
            array (
                'id_option' => 104,
                'name' => 'subsidi_ongkir_mobile_stockist',
                'value' => '0',
            ),
            93 => 
            array (
                'id_option' => 105,
                'name' => 'subsidi_ongkir_master_stockist',
                'value' => '0',
            ),
            94 => 
            array (
                'id_option' => 106,
                'name' => 'subsidi_ongkir_under_master',
                'value' => '0',
            ),
            95 => 
            array (
                'id_option' => 107,
                'name' => 'linkita_member_id',
                'value' => '0',
            ),
            96 => 
            array (
                'id_option' => 108,
                'name' => 'linkita_username',
                'value' => '',
            ),
            97 => 
            array (
                'id_option' => 109,
                'name' => 'linkita_password',
                'value' => '',
            ),
            98 => 
            array (
                'id_option' => 110,
                'name' => 'linkita_client_key',
                'value' => '',
            ),
            99 => 
            array (
                'id_option' => 111,
                'name' => 'linkita_token',
                'value' => '',
            ),
            100 => 
            array (
                'id_option' => 112,
                'name' => 'linkita_active',
                'value' => '0',
            ),
        ));
        
        
    }
}