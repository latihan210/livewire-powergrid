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
        Schema::create('jpb_ro', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('invoice', 50)->nullable()->default('')->index('ro_invoice');
            $table->bigInteger('id_activator')->index('ro_id_activator');
            $table->bigInteger('id_member')->index('ro_id_member');
            $table->bigInteger('id_stockist')->index('ro_id_stockist');
            $table->bigInteger('id_shop_order')->index('ro_id_shop_order');
            $table->string('position', 10)->nullable();
            $table->string('type', 10)->nullable()->default('')->index('ro_type');
            $table->text('pins')->nullable();
            $table->text('meta')->nullable();
            $table->tinyInteger('status')->index('ro_status');
            $table->double('point');
            $table->double('total_bv');
            $table->integer('total_qty');
            $table->double('subtotal');
            $table->smallInteger('unique');
            $table->double('shipping');
            $table->double('shipping_discount');
            $table->double('discount');
            $table->double('voucher');
            $table->double('fee')->default(0);
            $table->double('ppn');
            $table->double('autoro')->default(0);
            $table->double('total_checkout')->default(0);
            $table->double('total_payment');
            $table->double('total_omzet');
            $table->string('shipping_method', 100)->nullable()->default('');
            $table->string('desc')->nullable()->default('');
            $table->dateTime('datecreated')->index('ro_datecreated');
            $table->dateTime('datemodified');
            $table->dateTime('dateconfirmed')->nullable()->index('ro_dateconfirmed');
            $table->string('confirmed_by', 50)->nullable();
            $table->string('modified_by', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_ro');
    }
};
