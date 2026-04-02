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
        Schema::create('jpb_auto_ro_out', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('jpb_auto_ro_out_member_idx');
            $table->bigInteger('id_source')->index('jpb_auto_ro_out_source_id_idx');
            $table->string('source', 20)->index('jpb_auto_ro_out_source_idx')->comment('bonus, topup, shop, withdraw, transfer');
            $table->integer('amount');
            $table->integer('status')->comment('1 = active, 0 = inactive');
            $table->text('description');
            $table->dateTime('datecreated');

            $table->unique(['id_member', 'id_source', 'source'], 'jpb_auto_ro_out_member_source_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_auto_ro_out');
    }
};
