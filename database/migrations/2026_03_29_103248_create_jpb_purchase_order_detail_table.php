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
        Schema::create('jpb_purchase_order_detail', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_purchase_order')->index('pod_id_purchase_order');
            $table->integer('id_supplier')->index('pod_id_supplier');
            $table->integer('id_product_kledo');
            $table->integer('id_varian');
            $table->integer('product')->index('jpb_purchase_order_detail_product_idx');
            $table->string('name')->nullable();
            $table->string('varian', 200)->nullable();
            $table->string('image')->nullable();
            $table->integer('weight')->comment('Weight = Gram');
            $table->integer('price');
            $table->integer('price_cart');
            $table->integer('qty');
            $table->integer('discount');
            $table->double('pph');
            $table->double('ppn');
            $table->integer('subtotal');
            $table->integer('subtotal_omzet');
            $table->integer('subtotal_weight');
            $table->text('description')->nullable();
            $table->date('dateexpired')->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_purchase_order_detail');
    }
};
