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
        $this->renameIfNeeded('jpb_bonus_generation_refs', 'bonus_generation_refs');
        $this->renameIfNeeded('jpb_bonus_level_refs', 'bonus_level_refs');
        $this->renameIfNeeded('jpb_bonus_matching_refs', 'bonus_matching_refs');
        $this->renameIfNeeded('jpb_ewallet_transfer', 'wallet_transfers');
        $this->renameIfNeeded('jpb_product_area_fee', 'product_area_fees');
        $this->renameIfNeeded('jpb_product_package_item', 'product_package_items');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->renameIfNeeded('product_package_items', 'jpb_product_package_item');
        $this->renameIfNeeded('product_area_fees', 'jpb_product_area_fee');
        $this->renameIfNeeded('wallet_transfers', 'jpb_ewallet_transfer');
        $this->renameIfNeeded('bonus_matching_refs', 'jpb_bonus_matching_refs');
        $this->renameIfNeeded('bonus_level_refs', 'jpb_bonus_level_refs');
        $this->renameIfNeeded('bonus_generation_refs', 'jpb_bonus_generation_refs');
    }

    private function renameIfNeeded(string $from, string $to): void
    {
        if (Schema::hasTable($from) && ! Schema::hasTable($to)) {
            Schema::rename($from, $to);
        }
    }
};
