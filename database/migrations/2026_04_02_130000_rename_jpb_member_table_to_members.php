<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('jpb_member') && ! Schema::hasTable('members')) {
            Schema::rename('jpb_member', 'members');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('members') && ! Schema::hasTable('jpb_member')) {
            Schema::rename('members', 'jpb_member');
        }
    }
};
