<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Models\RewardConfig;
use App\Models\RewardPoint;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RewardController extends Controller
{
    public function index(): View
    {
        $stats = [
            [
                'label' => 'Reward Configs',
                'value' => RewardConfig::count(),
                'description' => 'Konfigurasi reward yang akan dipakai sebagai dasar rule bisnis.',
            ],
            [
                'label' => 'Reward Points',
                'value' => RewardPoint::count(),
                'description' => 'Point reward yang sudah tercatat per member.',
            ],
            [
                'label' => 'Reward Claims',
                'value' => Reward::count(),
                'description' => 'Riwayat reward yang sudah masuk ke tabel claim.',
            ],
            [
                'label' => 'Active Configs',
                'value' => RewardConfig::query()->where('is_active', true)->count(),
                'description' => 'Config reward aktif yang siap dipakai modul selanjutnya.',
            ],
        ];

        $rewardConfigs = RewardConfig::query()
            ->orderByDesc('is_active')
            ->orderByDesc('datecreated')
            ->limit(10)
            ->get();

        $rewardPoints = RewardPoint::query()
            ->with('member')
            ->orderByDesc('point')
            ->orderByDesc('datecreated')
            ->limit(10)
            ->get();

        $rewards = Reward::query()
            ->with('member')
            ->orderByDesc('datecreated')
            ->limit(10)
            ->get();

        $pointSummary = DB::table('reward_points')
            ->select('type', DB::raw('COUNT(*) as total_rows'), DB::raw('SUM(point) as total_points'))
            ->groupBy('type')
            ->orderByDesc('total_points')
            ->get();

        return view('pages.rewards.index', compact(
            'stats',
            'rewardConfigs',
            'rewardPoints',
            'rewards',
            'pointSummary',
        ));
    }
}
