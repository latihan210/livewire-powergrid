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
        Schema::create('jpb_staff', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('username', 50)->unique('jpb_staff_username_unique');
            $table->string('password', 100);
            $table->string('name', 100);
            $table->string('email', 50)->index('jpb_staff_email_idx');
            $table->string('phone', 20);
            $table->string('photo')->nullable()->default('');
            $table->string('access', 10);
            $table->text('role')->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_staff');
    }
};
