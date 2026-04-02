<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $stats = [
            [
                'label' => 'Members',
                'value' => $this->count('members'),
                'description' => 'Data member aktif untuk fondasi migrasi.',
            ],
            [
                'label' => 'Products',
                'value' => $this->count('products'),
                'description' => 'Master produk dan paket yang sudah dipindahkan.',
            ],
            [
                'label' => 'Shop Orders',
                'value' => $this->count('shop_orders'),
                'description' => 'Order belanja yang masih dipertahankan dari sistem lama.',
            ],
            [
                'label' => 'Wallet Transactions',
                'value' => $this->count('wallet_transactions'),
                'description' => 'Mutasi e-wallet yang menjadi dasar modul keuangan.',
            ],
        ];

        $migrationHealth = [
            [
                'label' => 'Core Tables Without Prefix',
                'value' => $this->countExisting([
                    'members',
                    'bonuses',
                    'wallet_transactions',
                    'products',
                    'product_packages',
                    'product_variants',
                    'shop_orders',
                    'shop_order_items',
                    'withdrawals',
                ]),
                'total' => 9,
            ],
            [
                'label' => 'Support Tables Without Prefix',
                'value' => $this->countExisting([
                    'bonus_generation_refs',
                    'bonus_level_refs',
                    'bonus_matching_refs',
                    'wallet_transfers',
                    'product_area_fees',
                    'product_package_items',
                    'product_stocks',
                    'product_stock_ins',
                    'product_stock_outs',
                    'product_stock_opnames',
                    'stockist_product_stocks',
                    'stockist_product_stock_opnames',
                    'purchase_orders',
                    'purchase_order_items',
                    'rewards',
                    'reward_points',
                    'reward_configs',
                ]),
                'total' => 17,
            ],
        ];

        $legacyModules = [
            ['module' => 'Member', 'status' => 'Active', 'notes' => 'List member, sponsor, detail member sudah tersedia.'],
            ['module' => 'Produk & Inventory', 'status' => 'Mapping', 'notes' => 'Nama tabel inti inventori sudah dibersihkan untuk tahap implementasi UI.'],
            ['module' => 'Komisi & Wallet', 'status' => 'Mapping', 'notes' => 'Tabel bonus, wallet, withdraw, dan transfer sudah masuk skema baru.'],
            ['module' => 'Reward', 'status' => 'Mapping', 'notes' => 'Reward config, reward point, dan reward history sudah tanpa prefix.'],
        ];

        return view('dashboard', compact('stats', 'migrationHealth', 'legacyModules'));
    }

    private function count(string $table): int
    {
        if (! Schema::hasTable($table)) {
            return 0;
        }

        return DB::table($table)->count();
    }

    private function countExisting(array $tables): int
    {
        return collect($tables)
            ->filter(fn (string $table) => Schema::hasTable($table))
            ->count();
    }
}
