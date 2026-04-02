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
        Schema::create('jpb_rajaongkir', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('province_id')->default(0)->index('province_id');
            $table->string('province_name', 200);
            $table->integer('city_id')->default(0)->index('city_id');
            $table->string('city_name');
            $table->integer('district_id')->default(0)->index('district_id');
            $table->string('district_name');
            $table->integer('id_province')->default(0)->index('id_province');
            $table->integer('id_district')->default(0)->index('id_district');
            $table->integer('id_subdistrict')->default(0)->index('id_subdistrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_rajaongkir');
    }
};
