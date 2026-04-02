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
        Schema::create('jpb_ranks', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('rk_id_member');
            $table->string('username');
            $table->string('rank', 50)->nullable()->default('')->index('rk_rank');
            $table->tinyInteger('rank_index')->index('rk_index');
            $table->integer('downline');
            $table->double('point_left');
            $table->double('point_right');
            $table->boolean('status')->default(true)->index('rk_status');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_ranks');
    }
};
