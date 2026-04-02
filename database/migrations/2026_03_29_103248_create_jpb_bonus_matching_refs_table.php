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
        Schema::create('jpb_bonus_matching_refs', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_bonus_pairing')->index('id_bonus_pairing');
            $table->bigInteger('id_bonus_matching')->index('id_bonus_matching');
            $table->bigInteger('id_member')->index('jpb_bonus_matching_refs_member_idx');
            $table->bigInteger('id_downline');
            $table->tinyInteger('gen')->comment('bonus, topup, shop, withdraw, transfer');
            $table->tinyInteger('percentage')->comment('IN, OUT');
            $table->integer('bonus');
            $table->integer('amount');
            $table->boolean('status');
            $table->text('description')->nullable();
            $table->dateTime('datecreated');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_bonus_matching_refs');
    }
};
