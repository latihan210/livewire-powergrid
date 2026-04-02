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
        Schema::create('jpb_member_report', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->unique('jpb_member_report_member_unique');
            $table->double('pairing_left');
            $table->double('pairing_right');
            $table->double('pairing_qualified');
            $table->double('reward_left');
            $table->double('reward_right');
            $table->double('total_omzet');
            $table->double('total_ro_omzet');
            $table->double('total_ro_point');
            $table->double('last_ro_omzet');
            $table->double('last_ro_point');
            $table->dateTime('last_ro_date')->nullable();
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_member_report');
    }
};
