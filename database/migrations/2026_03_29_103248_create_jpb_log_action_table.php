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
        Schema::create('jpb_log_action', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name', 100)->index('jpb_log_action_name_idx');
            $table->string('status', 50);
            $table->string('username', 20)->nullable()->default('');
            $table->string('ip', 50)->nullable();
            $table->string('user_agent')->nullable();
            $table->string('platform')->nullable();
            $table->text('desc')->nullable();
            $table->string('assum')->nullable()->default('');
            $table->string('assum_staff')->nullable()->default('');
            $table->dateTime('datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_log_action');
    }
};
