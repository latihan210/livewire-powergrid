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
        Schema::create('jpb_product_varian', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('id_product')->index('pp_product');
            $table->string('name', 100)->index('pp_name');
            $table->string('varian', 200)->index('pp_varian');
            $table->double('bv')->nullable();
            $table->double('price_hpp')->default(0);
            $table->double('price')->default(0);
            $table->double('weight')->default(0);
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();

            $table->unique(['id_product', 'name', 'varian'], 'jpb_product_varian_product_name_varian_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_varian');
    }
};
