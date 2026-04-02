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
        Schema::create('jpb_member_confirm', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member');
            $table->string('member');
            $table->bigInteger('id_sponsor');
            $table->string('sponsor');
            $table->bigInteger('id_upline');
            $table->string('upline')->nullable();
            $table->bigInteger('id_downline');
            $table->string('downline');
            $table->string('package', 50)->nullable();
            $table->tinyInteger('package_count')->default(1);
            $table->string('position', 10)->nullable();
            $table->integer('status')->comment('0=Review,1=Confirmed');
            $table->string('access', 10)->comment('admin, pin');
            $table->bigInteger('id_shop_order');
            $table->string('referral_code', 100)->nullable()->default('');
            $table->double('bv');
            $table->double('nominal');
            $table->double('shipping');
            $table->smallInteger('uniquecode');
            $table->double('total_payment');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
            $table->dateTime('dateconfirmed')->nullable();
            $table->string('confirm_by', 100)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_member_confirm');
    }
};
