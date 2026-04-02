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
        Schema::create('jpb_video', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->text('title');
            $table->text('url');
            $table->integer('sequence');
            $table->text('image');
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
        Schema::dropIfExists('jpb_video');
    }
};
