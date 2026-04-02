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
        Schema::create('jpb_banks', function (Blueprint $table) {
            $table->comment('Kode dan Nama Bank');
            $table->integer('id', true);
            $table->string('nama', 150);
            $table->string('kode', 3)->index('kode');
            $table->string('type', 30)->nullable()->default('bank');
            $table->string('flipcode', 50)->nullable()->default('')->index('flipcode');
            $table->string('espaycode', 20)->nullable()->index('espaycode');
            $table->string('linkitacode', 50)->nullable();
            $table->string('logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_banks');
    }
};
