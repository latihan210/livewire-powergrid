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
        Schema::create('jpb_otp', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member');
            $table->string('email', 200)->nullable()->default('')->index('jpb_otp_email_idx');
            $table->string('type', 50)->nullable()->default('')->index('type_otp');
            $table->string('ip_address', 45)->nullable();
            $table->string('platform', 50)->nullable();
            $table->string('browser', 100)->nullable();
            $table->text('agent')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('otp', 10)->nullable()->default('')->index('otp');
            $table->unsignedInteger('expiration')->nullable()->index('jpb_otp_expiration_idx');
            $table->tinyInteger('status');
            $table->dateTime('datecreated')->nullable();
            $table->dateTime('datemodified')->nullable();

            $table->unique(['id_member', 'email', 'type'], 'jpb_otp_member_email_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_otp');
    }
};
