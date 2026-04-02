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
        Schema::create('jpb_sessions', function (Blueprint $table) {
            $table->string('session_id', 100)->primary();
            $table->string('device_id', 100)->nullable()->index('user_device');
            $table->string('username', 100)->index('user_idx');
            $table->string('session', 100)->nullable()->default('')->index('user_session');
            $table->bigInteger('id_member');
            $table->integer('id_staff');
            $table->string('ip_address', 45)->nullable();
            $table->string('platform', 50)->nullable();
            $table->string('browser', 100)->nullable();
            $table->text('agent')->nullable();
            $table->text('user_agent')->nullable();
            $table->integer('expiration')->default(0)->index('jpb_sessions_expiration_idx');
            $table->text('user_data')->nullable();
            $table->text('token')->nullable();
            $table->string('otp', 10)->nullable()->default('');
            $table->integer('otp_expiration')->default(0);
            $table->dateTime('datecreated')->nullable();
            $table->dateTime('datemodified')->nullable();

            $table->index(['session_id'], 'user_session_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_sessions');
    }
};
