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
        Schema::create('jpb_bonus_level_refs', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_bonus')->index('jpb_bonus_level_refs_bonus_idx');
            $table->bigInteger('id_member')->index('jpb_bonus_level_refs_member_idx');
            $table->bigInteger('id_downline');
            $table->smallInteger('level')->index('level')->comment('bonus, topup, shop, withdraw, transfer');
            $table->smallInteger('level_downline')->index('level_downline');
            $table->integer('omzet');
            $table->tinyInteger('percentage')->comment('IN, OUT');
            $table->integer('amount');
            $table->smallInteger('year')->index('jpb_bonus_level_refs_year_idx');
            $table->tinyInteger('month')->index('jpb_bonus_level_refs_month_idx');
            $table->date('date')->nullable()->index('jpb_bonus_level_refs_date_idx');
            $table->boolean('status');
            $table->text('description')->nullable();
            $table->dateTime('dateomzet')->nullable()->index('jpb_bonus_level_refs_dateomzet_idx');
            $table->dateTime('datecreated');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_bonus_level_refs');
    }
};
