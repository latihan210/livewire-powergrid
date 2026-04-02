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
        Schema::create('jpb_product_package', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('sku', 200)->nullable();
            $table->string('name', 200);
            $table->string('slug')->nullable();
            $table->string('type', 50)->nullable();
            $table->tinyInteger('hu');
            $table->string('type_price', 50)->nullable();
            $table->integer('total_item');
            $table->integer('total_qty');
            $table->double('total_amount')->default(0);
            $table->double('bv');
            $table->double('price')->default(0);
            $table->double('weight')->nullable()->comment('Weight = Gram');
            $table->double('sponsor_point');
            $table->double('pairing_point');
            $table->double('stockist_point');
            $table->double('reward_point');
            $table->string('image')->nullable()->default('');
            $table->text('description')->nullable();
            $table->tinyInteger('show_order')->default(0);
            $table->boolean('status')->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();

            $table->unique(['name', 'slug'], 'jpb_product_package_name_slug_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_package');
    }
};
