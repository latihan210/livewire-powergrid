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
        Schema::create('jpb_product_stock_opname', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_number', 50)->index('jpb_product_stock_opname_ref_idx');
            $table->integer('product_id')->index('jpb_product_stock_opname_product_idx');
            $table->integer('varian_id');
            $table->integer('recorded_qty');
            $table->integer('actual_qty');
            $table->integer('difference_qty');
            $table->double('price');
            $table->double('total');
            $table->string('type', 10)->nullable();
            $table->string('memo', 50)->nullable();
            $table->text('description')->nullable();
            $table->date('date_trans');
            $table->dateTime('datecreated')->index('jpb_product_stock_opname_date_idx');
            $table->dateTime('datemodified');
            $table->string('created_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_stock_opname');
    }
};
