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
        $this->renameIfNeeded('jpb_product_stock', 'product_stocks');
        $this->renameIfNeeded('jpb_product_stock_in', 'product_stock_ins');
        $this->renameIfNeeded('jpb_product_stock_out', 'product_stock_outs');
        $this->renameIfNeeded('jpb_product_stock_opname', 'product_stock_opnames');
        $this->renameIfNeeded('jpb_product_stockist', 'stockist_product_stocks');
        $this->renameIfNeeded('jpb_product_stockist_stock_opname', 'stockist_product_stock_opnames');
        $this->renameIfNeeded('jpb_purchase_order', 'purchase_orders');
        $this->renameIfNeeded('jpb_purchase_order_detail', 'purchase_order_items');
        $this->renameIfNeeded('jpb_reward', 'rewards');
        $this->renameIfNeeded('jpb_reward_point', 'reward_points');
        $this->renameIfNeeded('jpb_reward_config', 'reward_configs');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->renameIfNeeded('reward_configs', 'jpb_reward_config');
        $this->renameIfNeeded('reward_points', 'jpb_reward_point');
        $this->renameIfNeeded('rewards', 'jpb_reward');
        $this->renameIfNeeded('purchase_order_items', 'jpb_purchase_order_detail');
        $this->renameIfNeeded('purchase_orders', 'jpb_purchase_order');
        $this->renameIfNeeded('stockist_product_stock_opnames', 'jpb_product_stockist_stock_opname');
        $this->renameIfNeeded('stockist_product_stocks', 'jpb_product_stockist');
        $this->renameIfNeeded('product_stock_opnames', 'jpb_product_stock_opname');
        $this->renameIfNeeded('product_stock_outs', 'jpb_product_stock_out');
        $this->renameIfNeeded('product_stock_ins', 'jpb_product_stock_in');
        $this->renameIfNeeded('product_stocks', 'jpb_product_stock');
    }

    private function renameIfNeeded(string $from, string $to): void
    {
        if (Schema::hasTable($from) && ! Schema::hasTable($to)) {
            Schema::rename($from, $to);
        }
    }
};
