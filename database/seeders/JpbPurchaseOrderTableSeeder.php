<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbPurchaseOrderTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('purchase_orders')->delete();

        \DB::table('purchase_orders')->insert([
            0 => [
                'id' => 1,
                'id_purchase_kledo' => 0,
                'id_purchase_delivery' => 0,
                'id_supplier_kledo' => 0,
                'invoice' => 'INV/PO/00002',
                'id_supplier' => 1,
                'ref_number_order' => 'PO/00002',
                'ref_number_delivery' => null,
                'products' => 'a:1:{i:0;a:20:{s:2:"id";s:1:"1";s:9:"id_varian";i:0;s:16:"id_product_kledo";i:0;s:3:"sku";s:9:"PAKETA001";s:4:"name";s:10:"B4 Formats";s:4:"type";s:7:"perdana";s:6:"varian";s:0:"";s:5:"image";s:0:"";s:11:"description";s:33:"B4 Format adalah sebuah pelatihan";s:2:"bv";s:4:"2500";s:3:"qty";s:4:"2000";s:5:"price";s:6:"500000";s:10:"price_cart";s:6:"500000";s:6:"weight";s:1:"1";s:8:"discount";i:0;s:8:"subtotal";i:1000000000;s:11:"subtotal_bv";i:5000000;s:14:"subtotal_omzet";i:1000000000;s:15:"subtotal_weight";i:2000;s:11:"dateexpired";b:0;}}',
                'total_qty' => 2000,
                'subtotal' => 1000000000,
                'shipping' => 0,
                'unique' => 0,
                'pph' => 0.0,
                'ppn' => 0.0,
                'discount' => 0,
                'down_payment' => 0,
                'total_payment' => 1000000000,
                'status' => 1,
                'memo' => '',
                'description' => 'Stock Awal',
                'trans_date' => '2025-04-21',
                'due_date' => null,
                'delivery_date' => null,
                'dateexpired' => null,
                'datecreated' => '2025-04-21 12:52:43',
                'datemodified' => '2025-04-21 12:52:43',
                'dateconfirmed' => null,
                'created_by' => 'masteradmin',
                'modified_by' => null,
            ],
            1 => [
                'id' => 2,
                'id_purchase_kledo' => 0,
                'id_purchase_delivery' => 0,
                'id_supplier_kledo' => 0,
                'invoice' => 'INV/PO/00003',
                'id_supplier' => 2,
                'ref_number_order' => 'PO/00003',
                'ref_number_delivery' => null,
                'products' => 'a:1:{i:0;a:20:{s:2:"id";s:1:"3";s:9:"id_varian";i:0;s:16:"id_product_kledo";i:0;s:3:"sku";s:3:"M12";s:4:"name";s:11:"Minicon M12";s:4:"type";s:7:"perdana";s:6:"varian";s:0:"";s:5:"image";s:0:"";s:11:"description";s:0:"";s:2:"bv";s:4:"2500";s:3:"qty";s:3:"100";s:5:"price";s:6:"100000";s:10:"price_cart";s:6:"100000";s:6:"weight";s:4:"2000";s:8:"discount";i:0;s:8:"subtotal";i:10000000;s:11:"subtotal_bv";i:250000;s:14:"subtotal_omzet";i:10000000;s:15:"subtotal_weight";i:200000;s:11:"dateexpired";b:0;}}',
                'total_qty' => 100,
                'subtotal' => 10000000,
                'shipping' => 0,
                'unique' => 0,
                'pph' => 0.0,
                'ppn' => 0.0,
                'discount' => 0,
                'down_payment' => 0,
                'total_payment' => 10000000,
                'status' => 1,
                'memo' => '',
                'description' => '',
                'trans_date' => '2025-06-27',
                'due_date' => null,
                'delivery_date' => null,
                'dateexpired' => null,
                'datecreated' => '2025-06-27 13:57:59',
                'datemodified' => '2025-06-27 13:57:59',
                'dateconfirmed' => null,
                'created_by' => 'masteradmin',
                'modified_by' => null,
            ],
            2 => [
                'id' => 3,
                'id_purchase_kledo' => 0,
                'id_purchase_delivery' => 0,
                'id_supplier_kledo' => 0,
                'invoice' => 'INV/PO/00004',
                'id_supplier' => 2,
                'ref_number_order' => 'PO/00004',
                'ref_number_delivery' => null,
                'products' => 'a:1:{i:0;a:20:{s:2:"id";s:1:"4";s:9:"id_varian";i:0;s:16:"id_product_kledo";i:0;s:3:"sku";s:3:"M24";s:4:"name";s:11:"Minicon M24";s:4:"type";s:7:"perdana";s:6:"varian";s:0:"";s:5:"image";s:0:"";s:11:"description";s:0:"";s:2:"bv";s:4:"2500";s:3:"qty";s:3:"100";s:5:"price";s:6:"300000";s:10:"price_cart";s:6:"300000";s:6:"weight";s:4:"2000";s:8:"discount";i:0;s:8:"subtotal";i:30000000;s:11:"subtotal_bv";i:250000;s:14:"subtotal_omzet";i:30000000;s:15:"subtotal_weight";i:200000;s:11:"dateexpired";b:0;}}',
                'total_qty' => 100,
                'subtotal' => 30000000,
                'shipping' => 0,
                'unique' => 0,
                'pph' => 0.0,
                'ppn' => 0.0,
                'discount' => 0,
                'down_payment' => 0,
                'total_payment' => 30000000,
                'status' => 1,
                'memo' => '',
                'description' => '',
                'trans_date' => '2025-06-27',
                'due_date' => null,
                'delivery_date' => null,
                'dateexpired' => null,
                'datecreated' => '2025-06-27 13:59:25',
                'datemodified' => '2025-06-27 13:59:25',
                'dateconfirmed' => null,
                'created_by' => 'masteradmin',
                'modified_by' => null,
            ],
        ]);

    }
}
