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
        Schema::create('jpb_province', function (Blueprint $table) {
            $table->smallInteger('id')->primary();
            $table->integer('area_id');
            $table->string('province_name', 30);
            $table->string('province_code', 10)->nullable()->default('');
            $table->integer('id_express')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_province');
    }
};
