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
        Schema::create('jpb_product_area_fee', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('source', 30)->nullable()->index('paf_source');
            $table->integer('id_source')->index('paf_id_source');
            $table->integer('id_area')->index('paf_id_area');
            $table->double('fee')->default(0);
            $table->boolean('status')->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();

            $table->unique(['source', 'id_source', 'id_area'], 'jpb_product_area_fee_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_product_area_fee');
    }
};
