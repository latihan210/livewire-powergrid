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
        Schema::create('jpb_video_progress', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member');
            $table->bigInteger('id_video');
            $table->boolean('status')->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_video_progress');
    }
};
