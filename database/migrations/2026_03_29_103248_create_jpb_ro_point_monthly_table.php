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
        Schema::create('jpb_ro_point_monthly', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('rp_id_member');
            $table->smallInteger('year')->index('rp_year');
            $table->tinyInteger('month')->index('rp_month');
            $table->bigInteger('total_bv');
            $table->bigInteger('total_bv_left');
            $table->bigInteger('total_bv_right');
            $table->integer('kurs_bv_point');
            $table->double('point')->default(0);
            $table->double('point_left')->default(0);
            $table->double('point_right')->default(0);
            $table->boolean('status')->default(true)->comment('0=Pending,1=Confirmed');
            $table->text('desc');
            $table->date('date')->nullable()->index('rp_date');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');

            $table->unique(['id_member', 'year', 'month'], 'jpb_ro_point_monthly_member_period_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_ro_point_monthly');
    }
};
