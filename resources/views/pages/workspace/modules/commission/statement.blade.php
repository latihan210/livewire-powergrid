<x-layouts::app title="Statement Komisi">
    <div class="space-y-6">
        {{-- Header --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Statement Komisi</h1>
                    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-300">Laporan komisi detail per member dan periode</p>
                </div>
            </div>
        </div>

        {{-- Filter & Summary --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="grid gap-4 md:grid-cols-4">
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Periode</label>
                    <input type="month" class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Status</label>
                    <select class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                        <option value="">Semua</option>
                        <option value="pairing">Pairing</option>
                        <option value="direct">Direct</option>
                        <option value="level">Level</option>
                        <option value="ro">RO Bonus</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Member</label>
                    <input type="text" placeholder="Search..." class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                </div>
                <div class="flex items-end">
                    <button class="w-full rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                        Filter
                    </button>
                </div>
            </div>

            {{-- Summary Bar --}}
            <div class="mt-6 grid gap-3 md:grid-cols-3 pt-4 border-t border-neutral-200 dark:border-neutral-700">
                <div class="flex justify-between">
                    <span class="text-sm text-neutral-600 dark:text-neutral-400">Total Komisi</span>
                    <span class="font-semibold text-neutral-900 dark:text-neutral-100">Rp {{ number_format($totalCommission ?? 0, 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm text-neutral-600 dark:text-neutral-400">Transaksi</span>
                    <span class="font-semibold text-neutral-900 dark:text-neutral-100">{{ $totalTransactions ?? 0 }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm text-neutral-600 dark:text-neutral-400">Rata-rata</span>
                    <span class="font-semibold text-neutral-900 dark:text-neutral-100">Rp {{ number_format(($totalTransactions ?? 0) > 0 ? ($totalCommission ?? 0) / ($totalTransactions ?? 1) : 0, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>

        {{-- Commission Table --}}
        <div class="rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Member</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Tipe</th>
                            <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Nominal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-700">
                        @forelse($commissions ?? [] as $key => $commission)
                        <tr class="hover:bg-neutral-50 dark:hover:bg-neutral-800">
                            <td class="px-6 py-3 text-sm text-neutral-900 dark:text-neutral-100">{{ $key + 1 }}</td>
                            <td class="px-6 py-3 text-sm text-neutral-900 dark:text-neutral-100">{{ $commission['date'] ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm">
                                <div>
                                    <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $commission['username'] ?? '-' }}</p>
                                    <p class="text-xs text-neutral-600 dark:text-neutral-400">{{ $commission['name'] ?? '' }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-sm">
                                <span class="inline-flex rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                    {{ $commission['type'] ?? 'Unknown' }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-right text-sm font-semibold text-neutral-900 dark:text-neutral-100">
                                Rp {{ number_format($commission['nominal'] ?? 0, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-3 text-sm text-neutral-600 dark:text-neutral-400">{{ $commission['description'] ?? '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-sm text-neutral-600 dark:text-neutral-400">
                                Tidak ada data komisi
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Help Section --}}
        <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-600 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <p><strong>Catatan:</strong> Statement komisi menampilkan semua transaksi bonus yang sudah terbentuk. Filter berdasarkan periode, tipe bonus, dan member untuk analysis lebih detail.</p>
        </div>
    </div>
</x-layouts::app>