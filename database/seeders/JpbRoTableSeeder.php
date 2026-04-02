<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JpbRoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jpb_ro')->delete();
        
        \DB::table('jpb_ro')->insert(array (
            0 => 
            array (
                'id' => 1,
                'invoice' => 'INV/RO/00001312',
                'id_activator' => 8,
                'id_member' => 8,
                'id_stockist' => 0,
                'id_shop_order' => 48,
                'position' => '',
                'type' => 'transfer',
                'pins' => '',
                'meta' => '[{"grouping":"product","grouping_id":"1","product_id":"1","package_id":0,"varian_id":0,"type":"perdana","sku":"PAKETA001","name":"B4 Formats","alias":"B4 Formats","varian":"","image":"https:\\/\\/jpbuana.s3.us-west-004.backblazeb2.com\\/products\\/b4-formats-1753095327.jpeg","bv":"2500","weight":"1","omzet":"3300000","omzet_item":0,"price":"3300000","price_cart":"3300000","qty":"2","additional_cost":false,"point_sponsor":"0","point_pairing":"0","point_reward":"0","point_stockist":"0","subtotal":6600000,"subtotal_bv":5000,"subtotal_omzet":6600000,"subtotal_cost":0,"subtotal_weight":2,"subtotal_point_sponsor":0,"subtotal_point_pairing":0,"subtotal_point_reward":0,"subtotal_point_stockist":0,"productitems":false,"discount":0,"discounts":{"nominal":0,"percent":0}}]',
                'status' => 0,
                'point' => 0.0,
                'total_bv' => 5000.0,
                'total_qty' => 2,
                'subtotal' => 6600000.0,
                'unique' => 1,
                'shipping' => 0.0,
                'shipping_discount' => 0.0,
                'discount' => 0.0,
                'voucher' => 0.0,
                'fee' => 0.0,
                'ppn' => 0.0,
                'autoro' => 0.0,
                'total_checkout' => 6600000.0,
                'total_payment' => 6600001.0,
                'total_omzet' => 6600000.0,
                'shipping_method' => 'pickup',
                'desc' => 'Manual RO Saya',
                'datecreated' => '2025-07-21 18:02:34',
                'datemodified' => '2025-07-21 18:02:34',
                'dateconfirmed' => NULL,
                'confirmed_by' => NULL,
                'modified_by' => NULL,
            ),
        ));
        
        
    }
}