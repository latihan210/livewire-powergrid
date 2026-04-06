<?php

use App\Http\Controllers;
use App\Livewire;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('edukasi', 'edukasi')->name('edukasi');
Route::view('product', 'product')->name('product');
Route::view('opportunity', 'opportunity')->name('opportunity');

Route::middleware(['auth', 'verified', 'password.reset'])->group(function () {
    Route::get('dashboard', Controllers\DashboardController::class)->name('dashboard');
    // Route::get('finance', [Controllers\FinanceController::class, 'index'])->name('finance.index');
    // Route::get('rewards', [Controllers\RewardController::class, 'index'])->name('rewards.index');
    // Route::get('shopping/cart', [Controllers\ShoppingController::class, 'cart'])->name('shopping.cart');
    // Route::get('shopping/shoplist', [Controllers\ShoppingController::class, 'shop'])->name('shopping.shop');
    // Route::get('shopping/history', [Controllers\ShoppingController::class, 'history'])->name('shopping.history');
    // Route::get('workspace/{group}/{page}', [Controllers\WorkspacePlaceholderController::class, 'show'])->name('workspace.show');
    Route::get('impersonate/leave', [Controllers\ImpersonationController::class, 'stop'])->name('impersonation.stop');
    Route::get('register/member', [Controllers\InternalRegisteredUserController::class, 'create'])->name('member.register');
    Route::post('register/member', [Controllers\InternalRegisteredUserController::class, 'store'])->name('member.register.store');
});

Route::middleware(['auth', 'verified', 'password.reset', 'admin'])->group(function () {
    Route::get('legacy/modules', Controllers\LegacyModuleController::class)->name('legacy.modules');
    Route::get('products', [Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('inventory', [Controllers\InventoryController::class, 'index'])->name('inventory.index');
    Route::get('impersonate/member/{member}', [Controllers\ImpersonationController::class, 'start'])->name('impersonation.start');
    Route::resource('member', Controllers\MemberController::class)->except(['index', 'create', 'store']);
    Route::get('member', Livewire\MemberTable::class)->name('member');
    Route::resource('sponsor', Controllers\SponsorController::class)->except(['index', 'create', 'store']);
    Route::get('sponsor', Livewire\SponsorTable::class)->name('sponsor');
    Route::resource('generation', Controllers\GenerationController::class)->except(['index', 'create', 'store']);
    Route::get('generation', Livewire\GenerationTable::class)->name('generation');
    Route::resource('group', Controllers\GroupController::class)->except(['index', 'create', 'store']);
    Route::get('group', Livewire\GroupTable::class)->name('group');
    Route::resource('rank', Controllers\RankController::class)->except(['index', 'create', 'store']);
    Route::get('rank', Livewire\RankTable::class)->name('rank');
    Route::resource('summary', Controllers\SummaryController::class)->except(['index', 'create', 'store']);
    Route::get('summary', Livewire\SummaryTable::class)->name('summary');
    Route::resource('tree', Controllers\TreeController::class)->except(['index', 'create', 'store']);
    Route::get('tree', Livewire\TreeTable::class)->name('tree');
});

require __DIR__ . '/settings.php';
