<x-layouts::app title="Stok Produk Member">
    <div class="space-y-6">
        {{-- Header --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Stok Produk Member</h1>
                    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-300">Daftar stok atau kepemilikan produk pada akun member</p>
                </div>
            </div>
        </div>

        {{-- Summary Cards --}}
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm font-medium text-neutral-600 dark:text-neutral-400">Total Jenis Produk</p>
                <p class="mt-2 text-2xl font-bold text-neutral-900 dark:text-neutral-100">{{ $totalProducts ?? 0 }}</p>
            </div>
            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm font-medium text-neutral-600 dark:text-neutral-400">Total Kuantitas</p>
                <p class="mt-2 text-2xl font-bold text-neutral-900 dark:text-neutral-100">{{ $totalQuantity ?? 0 }}</p>
            </div>
            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm font-medium text-neutral-600 dark:text-neutral-400">Siap Kirim</p>
                <p class="mt-2 text-2xl font-bold text-neutral-900 dark:text-neutral-100">{{ $readyToShip ?? 0 }}</p>
            </div>
        </div>

        {{-- Filter Section --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="grid gap-4 md:grid-cols-4">
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Cari Produk</label>
                    <input type="text" placeholder="Nama atau SKU..." class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Status</label>
                    <select class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                        <option value="">Semua</option>
                        <option value="ready">Ready</option>
                        <option value="expired">Expired</option>
                        <option value="locked">Terkunci</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Min Qty</label>
                    <input type="number" min="0" placeholder="0" class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                </div>
                <div class="flex items-end">
                    <button class="w-full rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                        Filter
                    </button>
                </div>
            </div>
        </div>

        {{-- Stock Table --}}
        <div class="rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Produk</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">SKU</th>
                            <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Qty</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Tgl Terima</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Status</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-700">
                        @forelse($stocks ?? [] as $key => $stock)
                        <tr class="hover:bg-neutral-50 dark:hover:bg-neutral-800">
                            <td class="px-6 py-3 text-sm text-neutral-900 dark:text-neutral-100">{{ $key + 1 }}</td>
                            <td class="px-6 py-3 text-sm font-medium text-neutral-900 dark:text-neutral-100">{{ $stock['product_name'] ?? '-' }}</td>
                            <td class="px-6 py-3 text-center text-sm text-neutral-600 dark:text-neutral-400">{{ $stock['sku'] ?? '-' }}</td>
                            <td class="px-6 py-3 text-right text-sm font-semibold text-neutral-900 dark:text-neutral-100">{{ $stock['quantity'] ?? 0 }}</td>
                            <td class="px-6 py-3 text-sm text-neutral-600 dark:text-neutral-400">{{ $stock['received_date'] ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm">
                                @php
                                $status = $stock['status'] ?? 'ready';
                                $statusClass = [
                                'ready' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
                                'expired' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200',
                                'locked' => 'bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200',
                                ][$status] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="inline-flex rounded-full px-3 py-1 text-xs font-medium {{ $statusClass }}">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-center">
                                @if($stock['status'] === 'ready')
                                <button class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium">
                                    Transfer
                                </button>
                                @else
                                <span class="text-neutral-400 text-sm">—</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-sm text-neutral-600 dark:text-neutral-400">
                                Tidak ada stok produk
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Help Section --}}
        <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-600 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <p><strong>Catatan:</strong> Stok produk member yang selesai (Ready) dapat ditransfer ke member lain. Filter berdasarkan status untuk melihat produk yang dapat diaksi.</p>
        </div>
    </div>
</x-layouts::app>