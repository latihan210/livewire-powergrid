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
        Schema::create('jpb_auto_ro', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member');
            $table->bigInteger('id_source');
            $table->string('source', 30)->nullable();
            $table->double('nominal');
            $table->tinyInteger('percent')->index('jpb_auto_ro_percent_idx')->comment('IN, OUT');
            $table->double('amount');
            $table->boolean('status');
            $table->text('description')->nullable();
            $table->dateTime('datecreated');

            $table->unique(['id_member', 'id_source', 'source'], 'jpb_auto_ro_member_source_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_auto_ro');
    }
};
