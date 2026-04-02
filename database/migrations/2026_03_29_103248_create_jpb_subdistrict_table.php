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
        Schema::create('jpb_subdistrict', function (Blueprint $table) {
            $table->integer('id', true);
            $table->smallInteger('district_id');
            $table->string('subdistrict_name', 30);
            $table->integer('id_express');
            $table->string('lion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_subdistrict');
    }
};
