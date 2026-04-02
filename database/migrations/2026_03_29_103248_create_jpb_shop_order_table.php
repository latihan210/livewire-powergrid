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
        Schema::create('jpb_shop_order', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('invoice', 50)->nullable()->default('');
            $table->bigInteger('id_member')->index('po_id_member');
            $table->bigInteger('id_stockist');
            $table->bigInteger('id_espay');
            $table->string('type_order', 20)->nullable();
            $table->text('products')->nullable();
            $table->text('meta')->nullable();
            $table->integer('status')->index('jpb_shop_order_status_idx')->comment('0=Review,1=Confirmed, 2=done, 4=cancelled');
            $table->double('point_sponsor');
            $table->double('point_pairing');
            $table->double('point_reward');
            $table->double('point_stockist');
            $table->double('total_bv');
            $table->integer('total_qty');
            $table->double('subtotal');
            $table->double('shipping');
            $table->smallInteger('unique');
            $table->double('discount');
            $table->double('shipping_discount');
            $table->double('fee')->default(0);
            $table->double('ppn');
            $table->double('handling_fee')->default(0);
            $table->double('insurance_fee')->default(0);
            $table->double('additional_cost');
            $table->double('autoro')->default(0);
            $table->double('total_checkout')->default(0);
            $table->double('total_payment');
            $table->integer('payment_remain');
            $table->double('total_omzet');
            $table->double('voucher');
            $table->double('saldo_eproduct');
            $table->double('saldo_eshipping');
            $table->double('saldo_eshipping_subsidy');
            $table->string('payment_method', 100)->nullable()->default('');
            $table->string('payment_shipping_method', 20)->nullable()->default('transfer');
            $table->tinyInteger('payment_shipping_status')->nullable()->default(1);
            $table->string('bank_code', 30)->nullable();
            $table->string('account_number', 100)->nullable();
            $table->string('shipping_method', 100)->nullable()->default('');
            $table->string('name')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 200)->nullable();
            $table->integer('id_province')->nullable();
            $table->integer('id_district')->nullable();
            $table->integer('id_subdistrict')->nullable();
            $table->string('province', 200)->nullable()->default('');
            $table->string('district', 200)->nullable()->default('');
            $table->string('subdistrict', 200)->nullable()->default('');
            $table->string('village', 200)->nullable();
            $table->text('address')->nullable();
            $table->string('postcode', 8)->nullable()->default('');
            $table->string('courier', 30)->nullable()->default('');
            $table->string('service', 50)->nullable()->default('');
            $table->integer('weight');
            $table->string('resi', 200)->nullable()->default('');
            $table->boolean('pin_transfer')->default(false);
            $table->text('description')->nullable();
            $table->string('created_by', 50)->nullable();
            $table->string('confirmed_by', 50)->nullable();
            $table->string('modified_by', 50)->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
            $table->dateTime('dateconfirmed')->nullable();
            $table->dateTime('datestockistconfirmed')->nullable();
            $table->dateTime('dateexpired')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_shop_order');
    }
};
