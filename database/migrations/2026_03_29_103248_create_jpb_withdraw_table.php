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
        Schema::create('jpb_withdraw', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('id_member')->index('wd_id_member');
            $table->string('type', 30)->nullable()->index('wd_type');
            $table->integer('bank');
            $table->string('bank_type', 50)->nullable();
            $table->string('bank_code', 20)->nullable()->default('');
            $table->string('bank_name', 150)->nullable();
            $table->string('bill', 100);
            $table->string('bill_name', 100);
            $table->integer('nominal');
            $table->integer('nominal_receipt');
            $table->integer('tax');
            $table->integer('auto_ro');
            $table->integer('admin_fund');
            $table->tinyInteger('status')->nullable()->default(0)->index('wd_status');
            $table->string('flip_id', 50)->nullable()->default('');
            $table->string('linkita_inquiry', 100)->nullable()->index('wd_linkita_inquiry');
            $table->string('inquiry_status', 100)->nullable()->default('');
            $table->string('linkita_pay', 100)->nullable()->index('wd_linkita_pay');
            $table->string('payment_status', 100)->nullable()->default('');
            $table->dateTime('datecreated')->index('wd_date');
            $table->dateTime('datemodified');
            $table->dateTime('dateconfirmed')->nullable();
            $table->string('confirm_by', 50)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_withdraw');
    }
};
