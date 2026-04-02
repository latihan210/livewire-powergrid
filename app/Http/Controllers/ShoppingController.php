<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ShopOrder;
use App\Models\ShopOrderItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShoppingController extends Controller
{
    public function shop(Request $request): View
    {
        $member = $request->user()?->member;

        $products = Product::query()
            ->withCount('variants')
            ->where('status', true)
            ->where('show_order', true)
            ->orderByDesc('dateupdated')
            ->orderByDesc('id')
            ->limit(12)
            ->get();

        $featured = collect();

        if ($member) {
            $featured = ShopOrderItem::query()
                ->with(['product', 'variant'])
                ->where('id_member', $member->id)
                ->orderByDesc('datecreated')
                ->limit(5)
                ->get();
        }

        return view('pages.shopping.shop', [
            'member' => $member,
            'products' => $products,
            'featured' => $featured,
        ]);
    }

    public function cart(Request $request): View
    {
        $member = $request->user()?->member;

        abort_unless($member, 404);

        $cartItems = Cart::query()
            ->with(['product', 'variant'])
            ->where('id_member', $member->id)
            ->where('status', 1)
            ->orderByDesc('datecreated')
            ->get();

        $summary = [
            'items' => $cartItems->count(),
            'qty' => (int) $cartItems->sum('qty'),
            'subtotal' => (float) $cartItems->sum('subtotal'),
        ];

        return view('pages.shopping.cart', compact('member', 'cartItems', 'summary'));
    }

    public function history(Request $request): View
    {
        $member = $request->user()?->member;

        abort_unless($member, 404);

        $orders = ShopOrder::query()
            ->with(['items.product'])
            ->where('id_member', $member->id)
            ->orderByDesc('datecreated')
            ->limit(12)
            ->get();

        $summary = [
            'orders' => $orders->count(),
            'total_qty' => (int) $orders->sum('total_qty'),
            'total_spend' => (float) $orders->sum('total_payment'),
        ];

        return view('pages.shopping.history', compact('member', 'orders', 'summary'));
    }
}
