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
        Schema::create('jpb_log_cron', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('cron_name', 100)->index('jpb_log_cron_name_idx');
            $table->string('status', 50);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->text('log_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_log_cron');
    }
};
