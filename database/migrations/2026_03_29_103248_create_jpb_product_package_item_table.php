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
        Schema::create('jpb_product_package_item', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('id_package')->index('ppi_package');
            $table->integer('id_product')->index('ppi_product');
            $table->integer('id_varian')->index('ppi_varian');
            $table->integer('qty')->default(0);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_package_item');
    }
};
