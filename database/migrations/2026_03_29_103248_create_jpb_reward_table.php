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
        Schema::create('jpb_reward', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_member')->index('r_id_member');
            $table->integer('id_reward');
            $table->string('type', 50)->nullable();
            $table->bigInteger('point_qualified');
            $table->bigInteger('point_left');
            $table->bigInteger('point_right');
            $table->string('rank', 50)->nullable();
            $table->text('message');
            $table->double('nominal')->default(0);
            $table->double('nominal_receipt');
            $table->double('admin_fund');
            $table->double('tax');
            $table->integer('bank');
            $table->string('bank_code', 20)->nullable()->default('');
            $table->string('bill', 100)->nullable();
            $table->string('bill_name', 100)->nullable();
            $table->tinyInteger('is_trip');
            $table->tinyInteger('claim');
            $table->string('flip_id', 50)->nullable()->default('');
            $table->integer('status')->comment('0=Pending,1=Confirmed');
            $table->string('inquiry_status', 50)->nullable()->default('');
            $table->dateTime('datecreated');
            $table->dateTime('datemodified');
            $table->dateTime('dateconfirmed')->nullable();
            $table->dateTime('dateclaimed')->nullable();
            $table->string('confirm_by', 100)->nullable()->default('');

            $table->unique(['id_member', 'id_reward', 'type'], 'jpb_reward_member_reward_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_reward');
    }
};
