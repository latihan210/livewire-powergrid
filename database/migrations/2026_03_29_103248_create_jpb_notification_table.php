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
        Schema::create('jpb_notification', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name');
            $table->string('slug')->index('jpb_notification_slug_idx');
            $table->string('title')->nullable()->default('');
            $table->longText('content');
            $table->integer('status')->index('jpb_notification_status_idx');
            $table->string('type', 50)->default('');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_notification');
    }
};
