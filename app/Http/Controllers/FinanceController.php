<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\WalletTransaction;
use App\Models\WalletTransfer;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FinanceController extends Controller
{
    public function index(): View
    {
        $totalBonus = (float) Bonus::sum('amount');
        $walletIn = (int) WalletTransaction::query()->where('type', 'IN')->sum('amount');
        $walletOut = (int) WalletTransaction::query()->where('type', 'OUT')->sum('amount');
        $withdrawals = (int) Withdrawal::sum('nominal_receipt');

        $stats = [
            [
                'label' => 'Bonus Posted',
                'value' => $totalBonus,
                'description' => 'Akumulasi bonus yang sudah terbentuk dari sistem lama.',
                'currency' => true,
            ],
            [
                'label' => 'Wallet In',
                'value' => $walletIn,
                'description' => 'Mutasi masuk ke e-wallet member.',
                'currency' => true,
            ],
            [
                'label' => 'Wallet Out',
                'value' => $walletOut,
                'description' => 'Mutasi keluar dari e-wallet member.',
                'currency' => true,
            ],
            [
                'label' => 'Withdraw Receipt',
                'value' => $withdrawals,
                'description' => 'Nominal bersih yang diterima dari withdraw.',
                'currency' => true,
            ],
        ];

        $recentBonuses = Bonus::query()
            ->with('member')
            ->orderByDesc('datecreated')
            ->limit(8)
            ->get();

        $recentWalletTransactions = WalletTransaction::query()
            ->with('member')
            ->orderByDesc('datecreated')
            ->limit(10)
            ->get();

        $recentWithdrawals = Withdrawal::query()
            ->with('member')
            ->orderByDesc('datecreated')
            ->limit(8)
            ->get();

        $walletTransfers = WalletTransfer::query()
            ->orderByDesc('datecreated')
            ->limit(5)
            ->get();

        $bonusBreakdown = DB::table('bonuses')
            ->select('type', DB::raw('COUNT(*) as total_rows'), DB::raw('SUM(amount) as total_amount'))
            ->groupBy('type')
            ->orderBy('type')
            ->get();

        return view('pages.finance.index', compact(
            'stats',
            'recentBonuses',
            'recentWalletTransactions',
            'recentWithdrawals',
            'walletTransfers',
            'bonusBreakdown',
        ));
    }
}
