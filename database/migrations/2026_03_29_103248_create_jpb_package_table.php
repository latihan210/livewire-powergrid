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
        Schema::create('jpb_package', function (Blueprint $table) {
            $table->string('package', 50)->unique('jpb_package_name_unique');
            $table->string('package_name', 100);
            $table->tinyInteger('package_index');
            $table->tinyInteger('package_count')->default(1);
            $table->integer('bv');
            $table->integer('nominal');
            $table->tinyInteger('sponsor_percent');
            $table->tinyInteger('passup_percent');
            $table->tinyInteger('pairing_percent');
            $table->integer('pairing_nominal')->comment('Rp');
            $table->integer('pairing_max')->comment('BV');
            $table->smallInteger('pairing_point');
            $table->double('reward_point');
            $table->text('description')->nullable();
            $table->boolean('is_register');
            $table->tinyInteger('is_order');
            $table->boolean('is_active')->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->useCurrentOnUpdate()->nullable();
            $table->string('modified_by', 200)->nullable();

            $table->primary(['package']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_package');
    }
};
