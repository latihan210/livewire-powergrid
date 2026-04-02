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
        Schema::create('jpb_district', function (Blueprint $table) {
            $table->integer('id', true);
            $table->smallInteger('province_id')->index('idx_province_id');
            $table->string('district_name', 200);
            $table->string('district_type', 50)->nullable()->default('');
            $table->string('district_code', 20)->nullable()->default('');
            $table->string('postal_code', 10)->nullable()->default('');
            $table->integer('id_express');
            $table->string('lion', 200)->nullable()->index('idx_id_lion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_district');
    }
};
