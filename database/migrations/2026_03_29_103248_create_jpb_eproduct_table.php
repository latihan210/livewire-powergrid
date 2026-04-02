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
        Schema::create('jpb_eproduct', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('jpb_eproduct_member_idx');
            $table->bigInteger('id_source');
            $table->string('source', 20)->index('jpb_eproduct_source_idx')->comment('bonus, topup, shop, withdraw, transfer');
            $table->string('category', 20)->default('product')->comment('product, shipping');
            $table->double('amount');
            $table->string('type', 5)->index('jpb_eproduct_type_idx')->comment('IN, OUT');
            $table->integer('status')->comment('1 = active, 0 = inactive');
            $table->text('description');
            $table->dateTime('datecreated');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_eproduct');
    }
};
