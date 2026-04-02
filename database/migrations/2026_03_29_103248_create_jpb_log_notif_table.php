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
        Schema::create('jpb_log_notif', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('category', 100)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('send', 100)->nullable();
            $table->text('message')->nullable();
            $table->string('status', 50)->nullable();
            $table->timestamp('date')->useCurrent();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('user_2nd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_log_notif');
    }
};
