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
        Schema::create('jpb_ewallet', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('jpb_ewallet_member_idx');
            $table->bigInteger('id_source');
            $table->string('source', 20)->index('jpb_ewallet_source_idx')->comment('bonus, topup, shop, withdraw, transfer');
            $table->string('category', 50)->default('commission')->comment('commission, profit');
            $table->integer('nominal');
            $table->tinyInteger('percent');
            $table->integer('autoro');
            $table->integer('tax');
            $table->integer('amount');
            $table->string('type', 5)->index('jpb_ewallet_type_idx')->comment('IN, OUT');
            $table->integer('status')->comment('1 = active, 0 = inactive');
            $table->text('description');
            $table->dateTime('datecreated');

            $table->unique(['id_member', 'id_source', 'source'], 'jpb_ewallet_member_source_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_ewallet');
    }
};
