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
        Schema::create('jpb_purchase_order', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_purchase_kledo');
            $table->bigInteger('id_purchase_delivery');
            $table->integer('id_supplier_kledo')->nullable();
            $table->string('invoice', 50)->nullable()->default('');
            $table->integer('id_supplier')->index('po_id_supplier');
            $table->string('ref_number_order', 30)->nullable();
            $table->string('ref_number_delivery', 100)->nullable();
            $table->text('products')->nullable();
            $table->integer('total_qty');
            $table->integer('subtotal');
            $table->integer('shipping');
            $table->smallInteger('unique');
            $table->double('pph');
            $table->double('ppn');
            $table->integer('discount');
            $table->integer('down_payment');
            $table->integer('total_payment')->nullable();
            $table->integer('status')->index('jpb_purchase_order_status_idx')->comment('0=Review,1=Confirmed');
            $table->string('memo', 100)->nullable();
            $table->text('description')->nullable();
            $table->date('trans_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->date('dateexpired')->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
            $table->dateTime('dateconfirmed')->nullable();
            $table->string('created_by', 50)->nullable();
            $table->string('modified_by', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_purchase_order');
    }
};
