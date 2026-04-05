<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ImpersonationController;
use App\Http\Controllers\InternalRegisteredUserController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\LegacyModuleController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\WorkspacePlaceholderController;
use App\Livewire\MemberTable;
use App\Livewire\SponsorTable;
use App\Livewire\GenerationTable;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('edukasi', 'edukasi')->name('edukasi');
Route::view('product', 'product')->name('product');
Route::view('opportunity', 'opportunity')->name('opportunity');

Route::middleware(['auth', 'verified', 'password.reset'])->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::get('finance', [FinanceController::class, 'index'])->name('finance.index');
    Route::get('rewards', [RewardController::class, 'index'])->name('rewards.index');
    Route::get('shopping/cart', [ShoppingController::class, 'cart'])->name('shopping.cart');
    Route::get('shopping/shoplist', [ShoppingController::class, 'shop'])->name('shopping.shop');
    Route::get('shopping/history', [ShoppingController::class, 'history'])->name('shopping.history');
    Route::get('workspace/{group}/{page}', [WorkspacePlaceholderController::class, 'show'])->name('workspace.show');
    Route::get('impersonate/leave', [ImpersonationController::class, 'stop'])->name('impersonation.stop');
    Route::get('register/member', [InternalRegisteredUserController::class, 'create'])->name('member.register');
    Route::post('register/member', [InternalRegisteredUserController::class, 'store'])->name('member.register.store');
});

Route::middleware(['auth', 'verified', 'password.reset', 'admin'])->group(function () {
    Route::get('legacy/modules', LegacyModuleController::class)->name('legacy.modules');
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('inventory', [InventoryController::class, 'index'])->name('inventory.index');
    Route::get('impersonate/member/{member}', [ImpersonationController::class, 'start'])->name('impersonation.start');
    Route::resource('member', MemberController::class)->except(['index', 'create', 'store']);
    Route::get('member', MemberTable::class)->name('member');
    Route::resource('sponsor', SponsorController::class)->except(['index', 'create', 'store']);
    Route::get('sponsor', SponsorTable::class)->name('sponsor');
    Route::resource('generation', SponsorController::class)->except(['index', 'create', 'store']);
    Route::get('generation', GenerationTable::class)->name('generation');
});

require __DIR__ . '/settings.php';
