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
        Schema::create('jpb_pin_transfer', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member_sender')->index('pt_id_member_sender');
            $table->string('username_sender');
            $table->bigInteger('id_member')->index('pt_id_member');
            $table->string('username');
            $table->bigInteger('id_pin')->index('pt_id_pin');
            $table->integer('product')->index('pt_product');
            $table->integer('varian')->default(0);
            $table->integer('product_package')->default(0);
            $table->integer('amount');
            $table->integer('price_member');
            $table->string('type', 50)->nullable()->default('transfer_pin');
            $table->text('description')->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_pin_transfer');
    }
};
