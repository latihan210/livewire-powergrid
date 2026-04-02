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
        Schema::create('jpb_log', function (Blueprint $table) {
            $table->bigInteger('log_id', true);
            $table->string('log_name', 100)->index('jpb_log_name_idx');
            $table->dateTime('log_time');
            $table->string('log_status', 50);
            $table->text('log_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_log');
    }
};
