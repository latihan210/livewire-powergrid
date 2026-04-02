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
        Schema::create('jpb_news', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 200)->index('title');
            $table->string('slug')->nullable()->unique('jpb_news_slug_unique');
            $table->text('content')->nullable();
            $table->string('mime_type', 50)->nullable();
            $table->text('url')->nullable();
            $table->enum('status', ['publish', 'draft', 'delete'])->default('publish')->index('jpb_news_status_idx');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_news');
    }
};
