<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPackage;
use App\Models\ProductVariant;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $stats = [
            [
                'label' => 'Products',
                'value' => Product::count(),
                'description' => 'Master produk yang bisa dipakai untuk registrasi, RO, dan order.',
            ],
            [
                'label' => 'Packages',
                'value' => ProductPackage::count(),
                'description' => 'Paket produk yang sudah siap dimigrasikan ke modul penjualan.',
            ],
            [
                'label' => 'Variants',
                'value' => ProductVariant::count(),
                'description' => 'Varian yang terhubung ke produk utama.',
            ],
            [
                'label' => 'Visible Products',
                'value' => Product::where('show_order', true)->count(),
                'description' => 'Produk yang saat ini ditandai bisa tampil di order.',
            ],
        ];

        $products = Product::query()
            ->withCount('variants')
            ->orderByDesc('dateupdated')
            ->orderByDesc('id')
            ->limit(12)
            ->get();

        $packages = ProductPackage::query()
            ->orderByDesc('id')
            ->limit(8)
            ->get();

        return view('pages.products.index', compact('stats', 'products', 'packages'));
    }
}
