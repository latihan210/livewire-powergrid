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
        Schema::create('jpb_reward_config', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('type', 20);
            $table->string('reward', 200)->default('');
            $table->bigInteger('nominal');
            $table->integer('point');
            $table->text('packages')->nullable();
            $table->string('rank', 100)->nullable();
            $table->text('message')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_lifetime')->default(true);
            $table->boolean('is_active')->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();

            $table->unique(['type', 'reward', 'point', 'start_date', 'end_date', 'is_active'], 'jpb_reward_config_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_reward_config');
    }
};
