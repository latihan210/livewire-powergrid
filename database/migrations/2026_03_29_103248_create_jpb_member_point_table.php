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
        Schema::create('jpb_member_point', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('mp_id_member');
            $table->string('type', 20)->index('mp_type');
            $table->smallInteger('period')->default(0)->index('mp_period');
            $table->date('period_start')->nullable();
            $table->date('period_end')->nullable();
            $table->double('point_left');
            $table->double('point_right');
            $table->double('point_qualified');
            $table->integer('status')->default(1);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();

            $table->unique(['id_member', 'type', 'period'], 'jpb_member_point_member_type_period_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_member_point');
    }
};
