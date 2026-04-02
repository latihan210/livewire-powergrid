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
        Schema::create('jpb_product', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('sku', 100)->nullable();
            $table->string('name', 200)->index('product_name');
            $table->string('slug')->index('porduct_slug');
            $table->string('type', 50)->default('')->index('idx_type')->comment('All=Reg+RO');
            $table->string('varian')->nullable();
            $table->tinyInteger('hu');
            $table->integer('bv');
            $table->integer('price_hpp');
            $table->integer('price');
            $table->integer('price_member');
            $table->integer('price_customer');
            $table->double('sponsor_point');
            $table->double('pairing_point');
            $table->double('reward_point');
            $table->double('stockist_point');
            $table->integer('reward_budget');
            $table->double('weight')->nullable()->comment('Weight = Gram');
            $table->integer('stock');
            $table->text('description')->nullable();
            $table->string('image')->nullable()->default('');
            $table->text('s3_upload')->nullable();
            $table->tinyInteger('show_order')->nullable()->default(1);
            $table->boolean('status')->default(true);
            $table->string('created_by', 50)->nullable()->default('');
            $table->string('modified_by', 50)->nullable()->default('');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
            $table->dateTime('dateupdated')->nullable();

            $table->unique(['name', 'slug', 'varian'], 'jpb_product_name_slug_varian_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product');
    }
};
