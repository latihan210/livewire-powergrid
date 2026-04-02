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
        Schema::create('jpb_keys', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member');
            $table->string('name', 150)->nullable()->default('');
            $table->string('key', 100)->nullable()->default('');
            $table->tinyInteger('level')->default(1);
            $table->tinyInteger('ignore_limits');
            $table->boolean('is_private_key');
            $table->string('ip_addresses', 100)->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_keys');
    }
};
