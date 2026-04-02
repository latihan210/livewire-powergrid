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
        Schema::create('jpb_pairing_qualified', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('pq_id_member');
            $table->double('left');
            $table->double('right');
            $table->double('qualified');
            $table->double('total_point');
            $table->double('carry_left');
            $table->double('carry_right');
            $table->double('kurs');
            $table->tinyInteger('status')->default(1);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_pairing_qualified');
    }
};
