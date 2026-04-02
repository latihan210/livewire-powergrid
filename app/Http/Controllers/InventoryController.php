<?php

namespace App\Http\Controllers;

use App\Models\ProductStockIn;
use App\Models\ProductStockOut;
use App\Models\PurchaseOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class InventoryController extends Controller
{
    public function index(): View
    {
        $stats = [
            [
                'label' => 'Purchase Orders',
                'value' => PurchaseOrder::count(),
                'description' => 'Dokumen pembelian yang menjadi sumber stok masuk.',
            ],
            [
                'label' => 'Total Stock In',
                'value' => (int) ProductStockIn::sum('qty'),
                'description' => 'Akumulasi kuantitas stok masuk dari semua sumber.',
            ],
            [
                'label' => 'Total Stock Out',
                'value' => (int) ProductStockOut::sum('qty'),
                'description' => 'Akumulasi stok keluar dari order dan transaksi lain.',
            ],
            [
                'label' => 'Net Flow',
                'value' => (int) ProductStockIn::sum('qty') - (int) ProductStockOut::sum('qty'),
                'description' => 'Selisih sederhana antara stok masuk dan keluar.',
            ],
        ];

        $purchaseOrders = PurchaseOrder::query()
            ->with(['supplier', 'items'])
            ->orderByDesc('datecreated')
            ->limit(8)
            ->get();

        $recentStockIns = ProductStockIn::query()
            ->with(['product', 'supplier'])
            ->orderByDesc('datecreated')
            ->limit(8)
            ->get();

        $recentStockOuts = ProductStockOut::query()
            ->with(['product', 'member'])
            ->orderByDesc('datecreated')
            ->limit(8)
            ->get();

        $stockSummary = DB::table('product_stock_ins as psi')
            ->leftJoin('products as p', 'p.id', '=', 'psi.product')
            ->select(
                'psi.product',
                'p.name',
                DB::raw('SUM(psi.qty) as total_in')
            )
            ->groupBy('psi.product', 'p.name')
            ->orderByDesc('total_in')
            ->limit(6)
            ->get();

        return view('pages.inventory.index', compact(
            'stats',
            'purchaseOrders',
            'recentStockIns',
            'recentStockOuts',
            'stockSummary',
        ));
    }
}
