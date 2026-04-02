<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2026_03_29_103248_create_jpb_area_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2026_03_29_103248_create_jpb_auto_ro_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2026_03_29_103248_create_jpb_auto_ro_out_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2026_03_29_103248_create_jpb_banks_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2026_03_29_103248_create_jpb_bonus_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2026_03_29_103248_create_jpb_bonus_generation_refs_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2026_03_29_103248_create_jpb_bonus_level_refs_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2026_03_29_103248_create_jpb_bonus_matching_refs_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2026_03_29_103248_create_jpb_cart_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2026_03_29_103248_create_jpb_country_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2026_03_29_103248_create_jpb_district_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2026_03_29_103248_create_jpb_eproduct_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2026_03_29_103248_create_jpb_ewallet_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2026_03_29_103248_create_jpb_ewallet_transfer_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2026_03_29_103248_create_jpb_keys_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2026_03_29_103248_create_jpb_log_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2026_03_29_103248_create_jpb_log_action_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2026_03_29_103248_create_jpb_log_api_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2026_03_29_103248_create_jpb_log_cron_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2026_03_29_103248_create_jpb_log_notif_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2026_03_29_103248_create_jpb_member_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2026_03_29_103248_create_jpb_member_confirm_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2026_03_29_103248_create_jpb_member_omzet_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2026_03_29_103248_create_jpb_member_point_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2026_03_29_103248_create_jpb_member_report_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2026_03_29_103248_create_jpb_news_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2026_03_29_103248_create_jpb_notification_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2026_03_29_103248_create_jpb_options_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2026_03_29_103248_create_jpb_otp_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2026_03_29_103248_create_jpb_package_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2026_03_29_103248_create_jpb_pairing_point_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2026_03_29_103248_create_jpb_pairing_qualified_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2026_03_29_103248_create_jpb_pin_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2026_03_29_103248_create_jpb_pin_transfer_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2026_03_29_103248_create_jpb_product_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2026_03_29_103248_create_jpb_product_area_fee_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2026_03_29_103248_create_jpb_product_package_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2026_03_29_103248_create_jpb_product_package_item_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_in_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_opname_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_out_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2026_03_29_103248_create_jpb_product_stockist_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2026_03_29_103248_create_jpb_product_stockist_stock_opname_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2026_03_29_103248_create_jpb_product_varian_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2026_03_29_103248_create_jpb_province_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2026_03_29_103248_create_jpb_purchase_order_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2026_03_29_103248_create_jpb_purchase_order_detail_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2026_03_29_103248_create_jpb_rajaongkir_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2026_03_29_103248_create_jpb_ranks_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2026_03_29_103248_create_jpb_reward_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2026_03_29_103248_create_jpb_reward_config_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2026_03_29_103248_create_jpb_reward_point_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2026_03_29_103248_create_jpb_ro_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2026_03_29_103248_create_jpb_ro_point_monthly_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2026_03_29_103248_create_jpb_sessions_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2026_03_29_103248_create_jpb_shop_order_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2026_03_29_103248_create_jpb_shop_order_detail_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2026_03_29_103248_create_jpb_staff_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2026_03_29_103248_create_jpb_subdistrict_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2026_03_29_103248_create_jpb_supplier_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2026_03_29_103248_create_jpb_upgrade_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2026_03_29_103248_create_jpb_video_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2026_03_29_103248_create_jpb_video_progress_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2026_03_29_103248_create_jpb_withdraw_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}