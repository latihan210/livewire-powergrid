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
        Schema::create('jpb_product_stock', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id');
            $table->integer('qty');
            $table->double('price');
            $table->double('total');
            $table->string('supplier_name', 100);
            $table->text('description');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
            $table->string('created_by', 100)->nullable();
            $table->string('modified_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_stock');
    }
};
