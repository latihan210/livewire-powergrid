<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbPurchaseOrderDetailTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('purchase_order_items')->delete();

        \DB::table('purchase_order_items')->insert([
            0 => [
                'id' => 1,
                'id_purchase_order' => 1,
                'id_supplier' => 1,
                'id_product_kledo' => 0,
                'id_varian' => 0,
                'product' => 1,
                'name' => 'B4 Formats',
                'varian' => '',
                'image' => '',
                'weight' => 1,
                'price' => 500000,
                'price_cart' => 500000,
                'qty' => 2000,
                'discount' => 0,
                'pph' => 0.0,
                'ppn' => 0.0,
                'subtotal' => 1000000000,
                'subtotal_omzet' => 1000000000,
                'subtotal_weight' => 2000,
                'description' => 'B4 Format adalah sebuah pelatihan',
                'dateexpired' => null,
                'datecreated' => '2025-04-21 12:52:43',
                'datemodified' => '2025-04-21 12:52:43',
            ],
            1 => [
                'id' => 2,
                'id_purchase_order' => 2,
                'id_supplier' => 2,
                'id_product_kledo' => 0,
                'id_varian' => 0,
                'product' => 3,
                'name' => 'Minicon M12',
                'varian' => '',
                'image' => '',
                'weight' => 2000,
                'price' => 100000,
                'price_cart' => 100000,
                'qty' => 100,
                'discount' => 0,
                'pph' => 0.0,
                'ppn' => 0.0,
                'subtotal' => 10000000,
                'subtotal_omzet' => 10000000,
                'subtotal_weight' => 200000,
                'description' => '',
                'dateexpired' => null,
                'datecreated' => '2025-06-27 13:57:59',
                'datemodified' => '2025-06-27 13:57:59',
            ],
            2 => [
                'id' => 3,
                'id_purchase_order' => 3,
                'id_supplier' => 2,
                'id_product_kledo' => 0,
                'id_varian' => 0,
                'product' => 4,
                'name' => 'Minicon M24',
                'varian' => '',
                'image' => '',
                'weight' => 2000,
                'price' => 300000,
                'price_cart' => 300000,
                'qty' => 100,
                'discount' => 0,
                'pph' => 0.0,
                'ppn' => 0.0,
                'subtotal' => 30000000,
                'subtotal_omzet' => 30000000,
                'subtotal_weight' => 200000,
                'description' => '',
                'dateexpired' => null,
                'datecreated' => '2025-06-27 13:59:25',
                'datemodified' => '2025-06-27 13:59:25',
            ],
        ]);

    }
}
