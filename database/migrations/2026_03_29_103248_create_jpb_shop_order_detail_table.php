<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jpb_shop_order_detail', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_shop_order')->index('pod_id_shop_order');
            $table->bigInteger('id_member')->index('pod_id_member');
            $table->integer('product_package')->default(0)->index('pod_id_product_package');
            $table->integer('product')->index('jpb_shop_order_detail_product_idx');
            $table->integer('varian')->default(0)->index('pod_id_varian');
            $table->string('type', 50)->default('');
            $table->integer('weight')->comment('Weight = Gram');
            $table->double('point');
            $table->double('bv');
            $table->double('omzet');
            $table->double('price');
            $table->double('price_cart');
            $table->double('additional_cost');
            $table->integer('qty');
            $table->double('discount');
            $table->double('subtotal');
            $table->double('subtotal_bv');
            $table->double('subtotal_omzet');
            $table->double('subtotal_weight');
            $table->double('subtotal_cost');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_shop_order_detail');
    }
};
