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
        Schema::create('jpb_ewallet_transfer', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('id_transfer', 30)->index('ewt_id_transfer');
            $table->bigInteger('id_member_sender')->index('ewt_id_member_sender');
            $table->string('username_sender');
            $table->bigInteger('id_member')->index('ewt_id_member');
            $table->string('username');
            $table->integer('nominal');
            $table->integer('nominal_receipt');
            $table->integer('admin_fund');
            $table->boolean('status')->default(true)->index('ewt_status');
            $table->text('description')->nullable();
            $table->dateTime('datecreated')->index('ewt_date');
            $table->dateTime('datemodified');
            $table->string('created_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_ewallet_transfer');
    }
};
