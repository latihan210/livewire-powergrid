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
        Schema::create('jpb_reward_point', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('jpb_reward_point_member_idx');
            $table->string('package', 50);
            $table->string('type', 20)->index('jpb_reward_point_type_idx');
            $table->integer('bv');
            $table->double('point');
            $table->integer('status')->default(1);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_reward_point');
    }
};
