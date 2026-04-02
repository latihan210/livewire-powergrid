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
        Schema::create('jpb_bonus', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('id_bonus', 50)->index('jpb_bonus_code_idx');
            $table->bigInteger('id_member')->index('jpb_bonus_member_idx');
            $table->integer('type')->index('jpb_bonus_type_idx')->comment('1=Sponsor,2=Pairing');
            $table->text('desc')->nullable();
            $table->integer('status');
            $table->double('amount')->index('jpb_bonus_amount_idx');
            $table->double('tax');
            $table->double('amount_tax');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_bonus');
    }
};
