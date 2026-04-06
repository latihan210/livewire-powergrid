<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbPinTransferTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('jpb_pin_transfer')->delete();

        \DB::table('jpb_pin_transfer')->insert([
            0 => [
                'id' => 1,
                'id_member_sender' => 2,
                'username_sender' => 'jpbuana',
                'id_member' => 14,
                'username' => 'jpbasil6',
                'id_pin' => 1,
                'product' => 1,
                'varian' => 0,
                'product_package' => 0,
                'amount' => 500000,
                'price_member' => 3300000,
                'type' => 'transfer_pin',
                'description' => 'Transfer Stok Produk',
                'datecreated' => '2025-04-25 17:23:22',
                'datemodified' => '2025-04-25 17:23:22',
            ],
            1 => [
                'id' => 2,
                'id_member_sender' => 2,
                'username_sender' => 'jpbuana',
                'id_member' => 14,
                'username' => 'jpbasil6',
                'id_pin' => 2,
                'product' => 1,
                'varian' => 0,
                'product_package' => 0,
                'amount' => 500000,
                'price_member' => 3300000,
                'type' => 'transfer_pin',
                'description' => 'Transfer Stok Produk',
                'datecreated' => '2025-04-25 17:23:22',
                'datemodified' => '2025-04-25 17:23:22',
            ],
            2 => [
                'id' => 3,
                'id_member_sender' => 2,
                'username_sender' => 'jpbuana',
                'id_member' => 14,
                'username' => 'jpbasil6',
                'id_pin' => 3,
                'product' => 1,
                'varian' => 0,
                'product_package' => 0,
                'amount' => 500000,
                'price_member' => 3300000,
                'type' => 'transfer_pin',
                'description' => 'Transfer Stok Produk',
                'datecreated' => '2025-04-25 17:23:22',
                'datemodified' => '2025-04-25 17:23:22',
            ],
        ]);

    }
}
