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
        $this->renameIfNeeded('jpb_bonus', 'bonuses');
        $this->renameIfNeeded('jpb_ewallet', 'wallet_transactions');
        $this->renameIfNeeded('jpb_product', 'products');
        $this->renameIfNeeded('jpb_product_varian', 'product_variants');
        $this->renameIfNeeded('jpb_product_package', 'product_packages');
        $this->renameIfNeeded('jpb_shop_order', 'shop_orders');
        $this->renameIfNeeded('jpb_shop_order_detail', 'shop_order_items');
        $this->renameIfNeeded('jpb_withdraw', 'withdrawals');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->renameIfNeeded('withdrawals', 'jpb_withdraw');
        $this->renameIfNeeded('shop_order_items', 'jpb_shop_order_detail');
        $this->renameIfNeeded('shop_orders', 'jpb_shop_order');
        $this->renameIfNeeded('product_packages', 'jpb_product_package');
        $this->renameIfNeeded('product_variants', 'jpb_product_varian');
        $this->renameIfNeeded('products', 'jpb_product');
        $this->renameIfNeeded('wallet_transactions', 'jpb_ewallet');
        $this->renameIfNeeded('bonuses', 'jpb_bonus');
    }

    private function renameIfNeeded(string $from, string $to): void
    {
        if (Schema::hasTable($from) && ! Schema::hasTable($to)) {
            Schema::rename($from, $to);
        }
    }
};
