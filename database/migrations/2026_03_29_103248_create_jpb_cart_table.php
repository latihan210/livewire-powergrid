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
        Schema::create('jpb_cart', function (Blueprint $table) {
            $table->string('id', 200)->primary();
            $table->string('cart_code')->unique('jpb_cart_code_unique');
            $table->bigInteger('id_member')->index('cart_member');
            $table->string('type')->nullable();
            $table->string('grouping', 50)->index('cart_group');
            $table->integer('grouping_id')->index('cart_groupid');
            $table->integer('product_id')->index('cart_product');
            $table->integer('package_id')->index('cart_package');
            $table->integer('varian_id')->index('cart_varian');
            $table->string('name')->nullable();
            $table->double('weight')->nullable();
            $table->double('bv');
            $table->double('price')->nullable();
            $table->integer('qty')->nullable();
            $table->double('subtotal')->nullable();
            $table->integer('total_item');
            $table->text('items')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_cart');
    }
};
