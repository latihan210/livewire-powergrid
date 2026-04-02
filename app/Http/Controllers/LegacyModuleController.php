<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LegacyModuleController extends Controller
{
    public function __invoke(): View
    {
        $modules = [
            [
                'legacy' => 'Member',
                'menus' => 'Tambah Member, List Member, Jaringan Binary, Jaringan Generasi, Upgrade, Manual RO',
                'laravel' => 'Member list, sponsor list, member detail',
                'status' => 'In Progress',
                'next_step' => 'Bangun tree, generation, dan transaksi member.',
            ],
            [
                'legacy' => 'Produk Manage',
                'menus' => 'Master Produk, Master Paket, Order Produk, Stok Produk, Penyesuaian Stok',
                'laravel' => 'Schema produk, paket, stok, purchase order sudah dibersihkan',
                'status' => 'Mapping Ready',
                'next_step' => 'Buat model, relation, dan grid inventory.',
            ],
            [
                'legacy' => 'Komisi / eWallet',
                'menus' => 'Bonus Detail, Statement Komisi, eWallet, Withdraw, Auto RO',
                'laravel' => 'Schema bonus, wallet, wallet transfer, withdraw sudah tanpa prefix',
                'status' => 'Mapping Ready',
                'next_step' => 'Bangun dashboard keuangan dan laporan mutasi.',
            ],
            [
                'legacy' => 'Laporan',
                'menus' => 'Pendaftaran, Upgrade, RO, Order, Omzet, Reward, Pairing',
                'laravel' => 'Belum ada UI laporan, baru fondasi data',
                'status' => 'Planned',
                'next_step' => 'Mulai dari laporan member, order, dan wallet.',
            ],
            [
                'legacy' => 'Pengaturan',
                'menus' => 'Data Perusahaan, Staff, Paket, Produk, Reward, Bonus, Withdraw',
                'laravel' => 'Profile dan Security sudah aktif',
                'status' => 'Partial',
                'next_step' => 'Pisahkan setting bisnis ke modul admin.',
            ],
        ];

        return view('pages.legacy.modules', compact('modules'));
    }
}
