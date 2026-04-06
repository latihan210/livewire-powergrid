<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class WorkspacePlaceholderController extends Controller
{
    public function show(Request $request, string $group, string $page): View
    {
        abort_unless($this->canAccessGroup($request, $group), 403);

        $modules = $this->modules();
        $module = Arr::get($modules, "{$group}.{$page}");

        abort_unless($module, 404);

        // Check if we have a real implementation view
        $viewPath = "pages.workspace.modules.{$group}.{$page}";
        if (view()->exists($viewPath)) {
            return $this->loadRealView($group, $page, $request);
        }

        // Fallback to placeholder
        return view('pages.workspace.placeholder', [
            'group' => $group,
            'page' => $page,
            'module' => $module,
        ]);
    }

    private function loadRealView(string $group, string $page, Request $request): View
    {
        // Load data untuk modul tertentu
        $data = [];

        if ($group === 'member' && $page === 'overview') {
            $data = $this->getMemberOverviewData();
        } elseif ($group === 'commission' && $page === 'statement') {
            $data = $this->getCommissionStatementData();
        } elseif ($group === 'report' && $page === 'registration') {
            $data = $this->getRegistrationReportData();
        } elseif ($group === 'pin-member' && $page === 'datalists') {
            $data = $this->getPinMemberDatalistsData($request);
        }

        return view("pages.workspace.modules.{$group}.{$page}", $data);
    }

    private function getMemberOverviewData(): array
    {
        $totalMembers = Member::count();
        $activeMembers = Member::where('status', 1)->count();
        $totalOmzet = Member::sum('total_omzet');
        $avgOmzet = $totalMembers > 0 ? $totalOmzet / $totalMembers : 0;
        $newMembers7Days = Member::where('datecreated', '>=', now()->subDays(7))->count();
        $newMembersMonth = Member::where('datecreated', '>=', now()->startOfMonth())->count();
        $omzetMonth = Member::where('datecreated', '>=', now()->startOfMonth())->sum('total_omzet');

        // Rank distribution
        $rankDistribution = DB::table('members')
            ->select('package', DB::raw('COUNT(*) as count'))
            ->whereNotNull('package')
            ->groupBy('package')
            ->get()
            ->toArray();

        return compact(
            'totalMembers',
            'activeMembers',
            'totalOmzet',
            'avgOmzet',
            'newMembers7Days',
            'newMembersMonth',
            'omzetMonth',
            'rankDistribution',
        );
    }

    private function getCommissionStatementData(): array
    {
        $bonuses = DB::table('bonuses')
            ->join('members', 'bonuses.member_id', '=', 'members.id')
            ->select(
                'bonuses.datecreated as date',
                'members.username',
                'members.name',
                'bonuses.type',
                'bonuses.amount as nominal',
                DB::raw("CONCAT(bonuses.type, ' bonus') as description")
            )
            ->orderByDesc('bonuses.datecreated')
            ->limit(50)
            ->get();

        $totalCommission = DB::table('bonuses')->sum('amount');
        $totalTransactions = DB::table('bonuses')->count();

        return [
            'commissions' => $bonuses,
            'totalCommission' => $totalCommission,
            'totalTransactions' => $totalTransactions,
        ];
    }

    private function getRegistrationReportData(): array
    {
        $now = now();
        $startOfMonth = $now->startOfMonth();
        $endOfMonth = $now->endOfMonth();

        $registrations = Member::whereBetween('datecreated', [$startOfMonth, $endOfMonth])
            ->orderByDesc('datecreated')
            ->limit(50)
            ->get();

        $totalRegistration = Member::whereBetween('datecreated', [$startOfMonth, $endOfMonth])->count();
        $daysInPeriod = $startOfMonth->diffInDays($endOfMonth) + 1;

        // Calculate total value based on package (assuming standard package values)
        $totalValue = Member::whereBetween('datecreated', [$startOfMonth, $endOfMonth])->count() * 100000; // Placeholder value

        return [
            'registrations' => $registrations,
            'totalRegistration' => $totalRegistration,
            'daysInPeriod' => $daysInPeriod,
            'totalValue' => $totalValue,
        ];
    }

    private function getPinMemberDatalistsData(Request $request): array
    {
        // Mock data for product stock - this should be replaced with actual query
        $stocks = [
            ['product_name' => 'Paket Premium', 'sku' => 'PKG-001', 'quantity' => 5, 'received_date' => '2024-12-20', 'status' => 'ready'],
            ['product_name' => 'Paket Basic', 'sku' => 'PKG-002', 'quantity' => 2, 'received_date' => '2024-12-15', 'status' => 'ready'],
            ['product_name' => 'Suplemen A', 'sku' => 'SUP-001', 'quantity' => 1, 'received_date' => '2024-12-01', 'status' => 'expired'],
        ];

        $totalProducts = count($stocks);
        $totalQuantity = collect($stocks)->sum('quantity');
        $readyToShip = collect($stocks)->where('status', 'ready')->count();

        return [
            'stocks' => $stocks,
            'totalProducts' => $totalProducts,
            'totalQuantity' => $totalQuantity,
            'readyToShip' => $readyToShip,
        ];
    }

    private function canAccessGroup(Request $request, string $group): bool
    {
        $adminGroups = [
            'member',
            'pin',
            'productmanage',
            'setting',
            'staff',
            'news',
        ];

        if (in_array($group, $adminGroups, true)) {
            return $request->user()?->isAdministrator() ?? false;
        }

        return true;
    }

    private function modules(): array
    {
        return [
            'member' => [
                'generation' => [
                    'title' => 'Jaringan Generasi',
                    'description' => 'Modul ini akan menampilkan jaringan generasi member seperti aplikasi lama.',
                    'legacy_path' => 'member/generation',
                    'next_step' => 'Bangun tree query sponsor dan daftar downline per level.',
                ],
                'tree' => [
                    'title' => 'Jaringan Binary',
                    'description' => 'Halaman binary tree admin untuk melihat struktur upline dan posisi kiri/kanan.',
                    'legacy_path' => 'member/tree',
                    'next_step' => 'Buat visual tree dan pencarian member berdasarkan username.',
                ],
            ],
            'member-portal' => [
                'ro' => [
                    'title' => 'Repeat Order',
                    'description' => 'Flow repeat order member seperti modul RO pada aplikasi lama.',
                    'legacy_path' => 'member/ro',
                    'next_step' => 'Hubungkan order member, stok produk, dan histori RO per periode.',
                ],
                'registry' => [
                    'title' => 'Riwayat Pendaftaran',
                    'description' => 'Daftar pendaftaran member yang dilakukan oleh akun member.',
                    'legacy_path' => 'member/registry',
                    'next_step' => 'Bangun laporan registrasi berdasarkan sponsor dan periode pendaftaran.',
                ],
            ],
            'network' => [
                'generation' => [
                    'title' => 'Network Generation',
                    'description' => 'Halaman jaringan generasi untuk member melihat downline bertingkat.',
                    'legacy_path' => 'network/generation',
                    'next_step' => 'Gunakan relasi sponsor dan level untuk daftar downline per generasi.',
                ],
                'tree' => [
                    'title' => 'Network Tree',
                    'description' => 'Visualisasi binary tree member sesuai struktur aplikasi lama.',
                    'legacy_path' => 'network/tree',
                    'next_step' => 'Bangun visual tree dengan pencarian member dan posisi kiri atau kanan.',
                ],
            ],
            'commission' => [
                'statement' => [
                    'title' => 'Statement Komisi',
                    'description' => 'Laporan komisi detail per member dan per sumber bonus.',
                    'legacy_path' => 'commission/statement',
                    'next_step' => 'Gabungkan bonus, wallet, dan referensi bonus ke laporan detail.',
                ],
                'autoro' => [
                    'title' => 'Auto RO',
                    'description' => 'Monitoring auto RO dan saldo maintenance member.',
                    'legacy_path' => 'commission/autoro',
                    'next_step' => 'Map tabel auto_ro, auto_ro_out, dan ro monthly ke dashboard khusus.',
                ],
            ],
            'pin-member' => [
                'datalists' => [
                    'title' => 'Daftar Produk Member',
                    'description' => 'Daftar stok atau kepemilikan produk pada akun member.',
                    'legacy_path' => 'pin/datalists',
                    'next_step' => 'Hubungkan stok produk member dengan transaksi pin dan order member.',
                ],
                'transfer' => [
                    'title' => 'Transfer Produk',
                    'description' => 'Flow transfer produk antar member sesuai modul pin lama.',
                    'legacy_path' => 'pin/transfer',
                    'next_step' => 'Bangun form transfer, validasi stok, dan histori approval.',
                ],
                'historylist' => [
                    'title' => 'History Produk Member',
                    'description' => 'Riwayat transaksi produk atau pin yang dimiliki member.',
                    'legacy_path' => 'pin/historylist',
                    'next_step' => 'Tambahkan filter tanggal dan status transaksi produk.',
                ],
            ],
            'shopping' => [
                'cart' => [
                    'title' => 'Keranjang Belanja',
                    'description' => 'Keranjang member untuk menyiapkan belanja produk.',
                    'legacy_path' => 'shopping/cart',
                    'next_step' => 'Hubungkan cart, product variants, dan simulasi ongkir.',
                ],
                'shoplist' => [
                    'title' => 'Belanja Produk',
                    'description' => 'Katalog belanja member dengan paket dan variasi produk.',
                    'legacy_path' => 'shopping/shoplist',
                    'next_step' => 'Bangun katalog produk dan checkout member.',
                ],
                'shophistorylist' => [
                    'title' => 'Riwayat Belanja',
                    'description' => 'Riwayat order dan pembayaran shopping member.',
                    'legacy_path' => 'shopping/shophistorylist',
                    'next_step' => 'Gabungkan shop orders, item orders, dan status pembayaran.',
                ],
            ],
            'pin' => [
                'generate' => [
                    'title' => 'Kirim Produk',
                    'description' => 'Flow kirim produk ke member dari stok perusahaan.',
                    'legacy_path' => 'pin/generate',
                    'next_step' => 'Hubungkan inventory, member stock, dan histori transaksi produk.',
                ],
                'datalists' => [
                    'title' => 'Stock Produk Member',
                    'description' => 'Daftar stok produk milik member seperti modul pin lama.',
                    'legacy_path' => 'pin/datalists',
                    'next_step' => 'Map tabel pin/member stock ke grid per member.',
                ],
                'historylist' => [
                    'title' => 'History Kirim Produk',
                    'description' => 'Riwayat transfer produk dari perusahaan atau antar member.',
                    'legacy_path' => 'pin/historylist',
                    'next_step' => 'Buat log transaksi produk dan filter berdasarkan periode.',
                ],
                'sales' => [
                    'title' => 'Orderan ke Perusahaan',
                    'description' => 'Daftar order produk yang masuk ke perusahaan.',
                    'legacy_path' => 'pin/sales',
                    'next_step' => 'Gabungkan shop order, stock out, dan status fulfillment.',
                ],
            ],
            'report' => [
                'registration' => [
                    'title' => 'Laporan Pendaftaran',
                    'description' => 'Laporan data pendaftaran member berdasarkan periode.',
                    'legacy_path' => 'report/registration',
                    'next_step' => 'Gunakan members.datecreated dan filter sponsor/upline.',
                ],
                'historyro' => [
                    'title' => 'Laporan RO',
                    'description' => 'Riwayat repeat order dan auto RO.',
                    'legacy_path' => 'report/historyro',
                    'next_step' => 'Map tabel ro dan shop order manual RO.',
                ],
                'pairing' => [
                    'title' => 'Laporan Pairing',
                    'description' => 'Laporan pairing dan perkembangan poin pasangan.',
                    'legacy_path' => 'report/pairing',
                    'next_step' => 'Gunakan bonus pairing, point pairing, dan binary tree.',
                ],
                'omzetdaily' => [
                    'title' => 'Omzet Posting Daily',
                    'description' => 'Omzet harian untuk kebutuhan operasional dan komisi.',
                    'legacy_path' => 'report/omzetdaily',
                    'next_step' => 'Agregasi omzet order harian dari shop orders dan bonus refs.',
                ],
                'omzetmonthly' => [
                    'title' => 'Omzet Posting Monthly',
                    'description' => 'Ringkasan omzet bulanan dari transaksi order dan RO.',
                    'legacy_path' => 'report/omzetmonthly',
                    'next_step' => 'Tambahkan filter periode dan rekap per sponsor/member.',
                ],
                'omzetorder' => [
                    'title' => 'Omzet Order',
                    'description' => 'Laporan omzet berbasis order produk.',
                    'legacy_path' => 'report/omzetorder',
                    'next_step' => 'Gunakan shop orders, item, dan mutasi stok.',
                ],
                'budgeting' => [
                    'title' => 'Budgeting',
                    'description' => 'Area laporan budgeting dan alokasi reward/komisi.',
                    'legacy_path' => 'report/budgeting',
                    'next_step' => 'Hubungkan reward budget dan summary bonus.',
                ],
                'tax' => [
                    'title' => 'Laporan Pajak',
                    'description' => 'Rekap pajak bonus, wallet, dan withdraw.',
                    'legacy_path' => 'report/tax',
                    'next_step' => 'Kumpulkan tax dari bonus, wallet, dan withdraw.',
                ],
            ],
            'productmanage' => [
                'supplierlist' => [
                    'title' => 'Supplier',
                    'description' => 'Master supplier untuk pembelian dan inventory.',
                    'legacy_path' => 'productmanage/supplierlist',
                    'next_step' => 'Rename jpb_supplier dan bangun CRUD supplier.',
                ],
                'stockadjustmentlist' => [
                    'title' => 'Stock Adjustment',
                    'description' => 'Penyesuaian stok dan stock opname.',
                    'legacy_path' => 'productmanage/stockadjustmentlist',
                    'next_step' => 'Gunakan product_stock_opnames dan stockist_product_stock_opnames.',
                ],
            ],
            'setting' => [
                'general' => [
                    'title' => 'Data Perusahaan',
                    'description' => 'Konfigurasi umum perusahaan dan data operasional dasar.',
                    'legacy_path' => 'setting/general',
                    'next_step' => 'Map options, notification, dan data perusahaan ke form setting.',
                ],
                'notification' => [
                    'title' => 'Notifikasi',
                    'description' => 'Template dan pengaturan notifikasi aplikasi.',
                    'legacy_path' => 'setting/notification',
                    'next_step' => 'Hubungkan notification template ke setting admin.',
                ],
                'cfgwithdraw' => [
                    'title' => 'Pengaturan Withdraw',
                    'description' => 'Aturan nominal minimum, biaya admin, dan approval withdraw.',
                    'legacy_path' => 'setting/cfgwithdraw',
                    'next_step' => 'Bangun form konfigurasi withdraw berbasis options/settings baru.',
                ],
                'video' => [
                    'title' => 'Video',
                    'description' => 'Pengelolaan video onboarding atau edukasi member.',
                    'legacy_path' => 'setting/video',
                    'next_step' => 'Map tabel video dan video progress ke modul konten.',
                ],
            ],
            'staff' => [
                'manage' => [
                    'title' => 'Master Staff',
                    'description' => 'Daftar staff internal dan hak akses admin.',
                    'legacy_path' => 'staff/manage',
                    'next_step' => 'Bangun model staff dan role matrix untuk admin panel.',
                ],
            ],
            'news' => [
                'index' => [
                    'title' => 'News',
                    'description' => 'Berita dan pengumuman yang muncul ke admin/member.',
                    'legacy_path' => 'news',
                    'next_step' => 'Gunakan tabel news untuk daftar dan editor konten.',
                ],
            ],
        ];
    }
}
