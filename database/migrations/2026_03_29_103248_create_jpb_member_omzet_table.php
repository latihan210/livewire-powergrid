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
        Schema::create('jpb_member_omzet', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('mo_id_member');
            $table->double('pack_omzet');
            $table->double('bv');
            $table->double('sponsor')->comment('Sponsor Point');
            $table->double('pairing')->comment('Pairing Point');
            $table->double('reward')->comment('Reward Point');
            $table->double('ro');
            $table->double('omzet');
            $table->double('price');
            $table->double('amount');
            $table->string('status', 100)->nullable()->index('mo_status');
            $table->text('desc')->nullable();
            $table->date('date')->index('mo_date');
            $table->dateTime('datecreated')->index('mo_datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_member_omzet');
    }
};
