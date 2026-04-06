<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbProductStockInTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('product_stock_ins')->delete();

        \DB::table('product_stock_ins')->insert([
            0 => [
                'id' => 1,
                'id_supplier' => 1,
                'id_warehouse' => 0,
                'id_source' => 1,
                'source' => 'purchase',
                'id_detail' => 1,
                'product' => 1,
                'varian' => 0,
                'qty' => 2000,
                'status' => 1,
                'description' => 'Stok Masuk dari Pembelian #INV/PO/00002',
                'datecreated' => '2025-04-21 12:52:43',
                'dateexpired' => null,
            ],
            1 => [
                'id' => 2,
                'id_supplier' => 2,
                'id_warehouse' => 0,
                'id_source' => 2,
                'source' => 'purchase',
                'id_detail' => 2,
                'product' => 3,
                'varian' => 0,
                'qty' => 100,
                'status' => 1,
                'description' => 'Stok Masuk dari Pembelian #INV/PO/00003',
                'datecreated' => '2025-06-27 13:57:59',
                'dateexpired' => null,
            ],
            2 => [
                'id' => 3,
                'id_supplier' => 2,
                'id_warehouse' => 0,
                'id_source' => 3,
                'source' => 'purchase',
                'id_detail' => 3,
                'product' => 4,
                'varian' => 0,
                'qty' => 100,
                'status' => 1,
                'description' => 'Stok Masuk dari Pembelian #INV/PO/00004',
                'datecreated' => '2025-06-27 13:59:25',
                'dateexpired' => null,
            ],
        ]);

    }
}
