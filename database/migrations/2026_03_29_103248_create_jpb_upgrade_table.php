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
        Schema::create('jpb_upgrade', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('upgrader')->nullable()->default(0);
            $table->bigInteger('id_member')->default(0)->index('jpb_upgrade_member_idx');
            $table->string('package_before', 50);
            $table->string('package_after', 50);
            $table->string('upgrade', 100);
            $table->bigInteger('omzet')->default(0);
            $table->bigInteger('amount')->default(0);
            $table->smallInteger('point')->default(0);
            $table->text('pins')->nullable();
            $table->text('desc')->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_upgrade');
    }
};
