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
        Schema::create('jpb_pin', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_order_pin');
            $table->string('id_pin', 30);
            $table->bigInteger('id_member')->index('pin_id_member');
            $table->bigInteger('id_member_owner');
            $table->bigInteger('id_member_register')->index('pin_id_member_register');
            $table->bigInteger('id_member_registered')->index('pin_id_member_registered');
            $table->integer('product')->index('pin_product');
            $table->integer('varian')->default(0);
            $table->string('type', 50)->nullable()->default('');
            $table->integer('bv');
            $table->bigInteger('amount');
            $table->integer('status')->index('pin_status')->comment('0=Pending,1=Active,2=Used');
            $table->string('used', 20)->nullable()->default('');
            $table->text('description')->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
            $table->date('dateexpired')->nullable();
            $table->dateTime('dateused')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_pin');
    }
};
