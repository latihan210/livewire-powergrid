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
        Schema::create('jpb_supplier', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name', 100)->unique('jpb_supplier_name_unique');
            $table->string('email', 50)->nullable()->index('jpb_supplier_email_idx');
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->integer('id_contact_kledo')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->dateTime('datecreated');
            $table->dateTime('datemodified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_supplier');
    }
};
