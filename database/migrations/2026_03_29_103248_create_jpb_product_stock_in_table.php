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
        Schema::create('jpb_product_stock_in', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_supplier')->index('id_supplier');
            $table->bigInteger('id_warehouse')->index('jpb_product_stock_in_warehouse_idx');
            $table->bigInteger('id_source')->index('jpb_product_stock_in_source_id_idx');
            $table->string('source', 20)->index('jpb_product_stock_in_source_idx')->comment('bonus, topup, shop, withdraw, transfer');
            $table->bigInteger('id_detail');
            $table->integer('product')->index('jpb_product_stock_in_product_idx');
            $table->integer('varian');
            $table->integer('qty');
            $table->boolean('status')->index('jpb_product_stock_in_status_idx')->comment('1 = active, 0 = inactive');
            $table->text('description');
            $table->dateTime('datecreated');
            $table->date('dateexpired')->nullable();

            $table->unique(['id_supplier', 'id_warehouse', 'id_source', 'source', 'product', 'varian', 'id_detail'], 'jpb_product_stock_in_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_stock_in');
    }
};
