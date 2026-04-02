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
        Schema::create('jpb_product_stockist', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('id_member')->index('pss_id_member');
            $table->bigInteger('id_source')->index('pss_id_source');
            $table->string('source', 20)->index('pss_source')->comment('bonus, topup, shop, withdraw, transfer');
            $table->bigInteger('id_detail')->index('pss_detail');
            $table->integer('product')->index('pss_product');
            $table->integer('varian')->index('pss_varian');
            $table->integer('qty');
            $table->double('price');
            $table->double('total');
            $table->string('form', 50)->nullable()->index('pss_form');
            $table->string('type', 5)->index('pss_type')->comment('IN, OUT');
            $table->tinyInteger('status')->default(1)->index('pss_status')->comment('1 = active, 0 = inactive');
            $table->text('description');
            $table->dateTime('datecreated')->index('pss_datecreated');
            $table->dateTime('datemodified');

            $table->unique(['id_member', 'id_source', 'source', 'id_detail', 'product', 'varian', 'type', 'status'], 'jpb_product_stockist_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_stockist');
    }
};
