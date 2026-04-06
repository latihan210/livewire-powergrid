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

        \DB::table('migrations')->insert([
            0 => [
                'id' => 1,
                'migration' => '2026_03_29_103248_create_jpb_area_table',
                'batch' => 0,
            ],
            1 => [
                'id' => 2,
                'migration' => '2026_03_29_103248_create_jpb_auto_ro_table',
                'batch' => 0,
            ],
            2 => [
                'id' => 3,
                'migration' => '2026_03_29_103248_create_jpb_auto_ro_out_table',
                'batch' => 0,
            ],
            3 => [
                'id' => 4,
                'migration' => '2026_03_29_103248_create_jpb_banks_table',
                'batch' => 0,
            ],
            4 => [
                'id' => 5,
                'migration' => '2026_03_29_103248_create_jpb_bonus_table',
                'batch' => 0,
            ],
            5 => [
                'id' => 6,
                'migration' => '2026_03_29_103248_create_jpb_bonus_generation_refs_table',
                'batch' => 0,
            ],
            6 => [
                'id' => 7,
                'migration' => '2026_03_29_103248_create_jpb_bonus_level_refs_table',
                'batch' => 0,
            ],
            7 => [
                'id' => 8,
                'migration' => '2026_03_29_103248_create_jpb_bonus_matching_refs_table',
                'batch' => 0,
            ],
            8 => [
                'id' => 9,
                'migration' => '2026_03_29_103248_create_jpb_cart_table',
                'batch' => 0,
            ],
            9 => [
                'id' => 10,
                'migration' => '2026_03_29_103248_create_jpb_country_table',
                'batch' => 0,
            ],
            10 => [
                'id' => 11,
                'migration' => '2026_03_29_103248_create_jpb_district_table',
                'batch' => 0,
            ],
            11 => [
                'id' => 12,
                'migration' => '2026_03_29_103248_create_jpb_eproduct_table',
                'batch' => 0,
            ],
            12 => [
                'id' => 13,
                'migration' => '2026_03_29_103248_create_jpb_ewallet_table',
                'batch' => 0,
            ],
            13 => [
                'id' => 14,
                'migration' => '2026_03_29_103248_create_jpb_ewallet_transfer_table',
                'batch' => 0,
            ],
            14 => [
                'id' => 15,
                'migration' => '2026_03_29_103248_create_jpb_keys_table',
                'batch' => 0,
            ],
            15 => [
                'id' => 16,
                'migration' => '2026_03_29_103248_create_jpb_log_table',
                'batch' => 0,
            ],
            16 => [
                'id' => 17,
                'migration' => '2026_03_29_103248_create_jpb_log_action_table',
                'batch' => 0,
            ],
            17 => [
                'id' => 18,
                'migration' => '2026_03_29_103248_create_jpb_log_api_table',
                'batch' => 0,
            ],
            18 => [
                'id' => 19,
                'migration' => '2026_03_29_103248_create_jpb_log_cron_table',
                'batch' => 0,
            ],
            19 => [
                'id' => 20,
                'migration' => '2026_03_29_103248_create_jpb_log_notif_table',
                'batch' => 0,
            ],
            20 => [
                'id' => 21,
                'migration' => '2026_03_29_103248_create_jpb_member_table',
                'batch' => 0,
            ],
            21 => [
                'id' => 22,
                'migration' => '2026_03_29_103248_create_jpb_member_confirm_table',
                'batch' => 0,
            ],
            22 => [
                'id' => 23,
                'migration' => '2026_03_29_103248_create_jpb_member_omzet_table',
                'batch' => 0,
            ],
            23 => [
                'id' => 24,
                'migration' => '2026_03_29_103248_create_jpb_member_point_table',
                'batch' => 0,
            ],
            24 => [
                'id' => 25,
                'migration' => '2026_03_29_103248_create_jpb_member_report_table',
                'batch' => 0,
            ],
            25 => [
                'id' => 26,
                'migration' => '2026_03_29_103248_create_jpb_news_table',
                'batch' => 0,
            ],
            26 => [
                'id' => 27,
                'migration' => '2026_03_29_103248_create_jpb_notification_table',
                'batch' => 0,
            ],
            27 => [
                'id' => 28,
                'migration' => '2026_03_29_103248_create_jpb_options_table',
                'batch' => 0,
            ],
            28 => [
                'id' => 29,
                'migration' => '2026_03_29_103248_create_jpb_otp_table',
                'batch' => 0,
            ],
            29 => [
                'id' => 30,
                'migration' => '2026_03_29_103248_create_jpb_package_table',
                'batch' => 0,
            ],
            30 => [
                'id' => 31,
                'migration' => '2026_03_29_103248_create_jpb_pairing_point_table',
                'batch' => 0,
            ],
            31 => [
                'id' => 32,
                'migration' => '2026_03_29_103248_create_jpb_pairing_qualified_table',
                'batch' => 0,
            ],
            32 => [
                'id' => 33,
                'migration' => '2026_03_29_103248_create_jpb_pin_table',
                'batch' => 0,
            ],
            33 => [
                'id' => 34,
                'migration' => '2026_03_29_103248_create_jpb_pin_transfer_table',
                'batch' => 0,
            ],
            34 => [
                'id' => 35,
                'migration' => '2026_03_29_103248_create_jpb_product_table',
                'batch' => 0,
            ],
            35 => [
                'id' => 36,
                'migration' => '2026_03_29_103248_create_jpb_product_area_fee_table',
                'batch' => 0,
            ],
            36 => [
                'id' => 37,
                'migration' => '2026_03_29_103248_create_jpb_product_package_table',
                'batch' => 0,
            ],
            37 => [
                'id' => 38,
                'migration' => '2026_03_29_103248_create_jpb_product_package_item_table',
                'batch' => 0,
            ],
            38 => [
                'id' => 39,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_table',
                'batch' => 0,
            ],
            39 => [
                'id' => 40,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_in_table',
                'batch' => 0,
            ],
            40 => [
                'id' => 41,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_opname_table',
                'batch' => 0,
            ],
            41 => [
                'id' => 42,
                'migration' => '2026_03_29_103248_create_jpb_product_stock_out_table',
                'batch' => 0,
            ],
            42 => [
                'id' => 43,
                'migration' => '2026_03_29_103248_create_jpb_product_stockist_table',
                'batch' => 0,
            ],
            43 => [
                'id' => 44,
                'migration' => '2026_03_29_103248_create_jpb_product_stockist_stock_opname_table',
                'batch' => 0,
            ],
            44 => [
                'id' => 45,
                'migration' => '2026_03_29_103248_create_jpb_product_varian_table',
                'batch' => 0,
            ],
            45 => [
                'id' => 46,
                'migration' => '2026_03_29_103248_create_jpb_province_table',
                'batch' => 0,
            ],
            46 => [
                'id' => 47,
                'migration' => '2026_03_29_103248_create_jpb_purchase_order_table',
                'batch' => 0,
            ],
            47 => [
                'id' => 48,
                'migration' => '2026_03_29_103248_create_jpb_purchase_order_detail_table',
                'batch' => 0,
            ],
            48 => [
                'id' => 49,
                'migration' => '2026_03_29_103248_create_jpb_rajaongkir_table',
                'batch' => 0,
            ],
            49 => [
                'id' => 50,
                'migration' => '2026_03_29_103248_create_jpb_ranks_table',
                'batch' => 0,
            ],
            50 => [
                'id' => 51,
                'migration' => '2026_03_29_103248_create_jpb_reward_table',
                'batch' => 0,
            ],
            51 => [
                'id' => 52,
                'migration' => '2026_03_29_103248_create_jpb_reward_config_table',
                'batch' => 0,
            ],
            52 => [
                'id' => 53,
                'migration' => '2026_03_29_103248_create_jpb_reward_point_table',
                'batch' => 0,
            ],
            53 => [
                'id' => 54,
                'migration' => '2026_03_29_103248_create_jpb_ro_table',
                'batch' => 0,
            ],
            54 => [
                'id' => 55,
                'migration' => '2026_03_29_103248_create_jpb_ro_point_monthly_table',
                'batch' => 0,
            ],
            55 => [
                'id' => 56,
                'migration' => '2026_03_29_103248_create_jpb_sessions_table',
                'batch' => 0,
            ],
            56 => [
                'id' => 57,
                'migration' => '2026_03_29_103248_create_jpb_shop_order_table',
                'batch' => 0,
            ],
            57 => [
                'id' => 58,
                'migration' => '2026_03_29_103248_create_jpb_shop_order_detail_table',
                'batch' => 0,
            ],
            58 => [
                'id' => 59,
                'migration' => '2026_03_29_103248_create_jpb_staff_table',
                'batch' => 0,
            ],
            59 => [
                'id' => 60,
                'migration' => '2026_03_29_103248_create_jpb_subdistrict_table',
                'batch' => 0,
            ],
            60 => [
                'id' => 61,
                'migration' => '2026_03_29_103248_create_jpb_supplier_table',
                'batch' => 0,
            ],
            61 => [
                'id' => 62,
                'migration' => '2026_03_29_103248_create_jpb_upgrade_table',
                'batch' => 0,
            ],
            62 => [
                'id' => 63,
                'migration' => '2026_03_29_103248_create_jpb_video_table',
                'batch' => 0,
            ],
            63 => [
                'id' => 64,
                'migration' => '2026_03_29_103248_create_jpb_video_progress_table',
                'batch' => 0,
            ],
            64 => [
                'id' => 65,
                'migration' => '2026_03_29_103248_create_jpb_withdraw_table',
                'batch' => 0,
            ],
        ]);

    }
}
