<x-layouts::app :title="__('Inventory & Purchase Orders')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Inventory & Purchase Orders</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Kontrol stok awal dari data legacy</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Modul ini menarik data dari purchase order, stok masuk, dan stok keluar yang sudah dipindahkan
                        ke schema baru. Tujuannya agar modul operasional mulai bisa dibaca langsung dari Laravel.
                    </p>
                </div>

                <a
                    href="{{ route('products.index') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Back to Products
                </a>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($stats as $stat)
                <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="text-sm text-neutral-500">{{ $stat['label'] }}</p>
                    <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">
                        {{ number_format($stat['value']) }}
                    </p>
                    <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-300">{{ $stat['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="grid gap-4 xl:grid-cols-[1.15fr_0.85fr]">
            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent purchase orders</h2>
                    <div class="mt-5 overflow-x-auto">
                        <table class="min-w-full divide-y divide-neutral-200 text-sm dark:divide-neutral-700">
                            <thead>
                                <tr class="text-left text-neutral-500">
                                    <th class="py-3 pr-4 font-medium">Invoice</th>
                                    <th class="py-3 pr-4 font-medium">Supplier</th>
                                    <th class="py-3 pr-4 font-medium">Qty</th>
                                    <th class="py-3 pr-4 font-medium">Total</th>
                                    <th class="py-3 font-medium">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800">
                                @forelse ($purchaseOrders as $order)
                                    <tr>
                                        <td class="py-4 pr-4">
                                            <div class="font-medium text-neutral-900 dark:text-neutral-100">{{ $order->invoice ?: '-' }}</div>
                                            <div class="text-xs text-neutral-500">{{ $order->ref_number_order ?: '-' }}</div>
                                        </td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                            {{ $order->supplier?->name ?: 'Supplier #'.$order->id_supplier }}
                                        </td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ number_format((int) $order->total_qty) }}</td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                            Rp {{ number_format((int) $order->total_payment, 0, ',', '.') }}
                                        </td>
                                        <td class="py-4">
                                            @if ((int) $order->status === 1)
                                                <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Confirmed</span>
                                            @else
                                                <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">Review</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-8 text-center text-neutral-500">Belum ada purchase order.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="grid gap-4 lg:grid-cols-2">
                    <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent stock in</h2>
                        <div class="mt-4 space-y-3">
                            @forelse ($recentStockIns as $stockIn)
                                <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                    <div class="flex items-center justify-between gap-3">
                                        <div>
                                            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $stockIn->product?->name ?: 'Product #'.$stockIn->product }}</p>
                                            <p class="text-xs text-neutral-500">{{ $stockIn->supplier?->name ?: 'Supplier #'.$stockIn->id_supplier }}</p>
                                        </div>
                                        <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-800">
                                            +{{ number_format((int) $stockIn->qty) }}
                                        </span>
                                    </div>
                                    <p class="mt-2 text-xs text-neutral-500">{{ $stockIn->description }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-neutral-500">Belum ada stok masuk.</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent stock out</h2>
                        <div class="mt-4 space-y-3">
                            @forelse ($recentStockOuts as $stockOut)
                                <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                    <div class="flex items-center justify-between gap-3">
                                        <div>
                                            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $stockOut->product?->name ?: 'Product #'.$stockOut->product }}</p>
                                            <p class="text-xs text-neutral-500">{{ $stockOut->member?->username ?: 'Member #'.$stockOut->id_member }}</p>
                                        </div>
                                        <span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-800">
                                            -{{ number_format((int) $stockOut->qty) }}
                                        </span>
                                    </div>
                                    <p class="mt-2 text-xs text-neutral-500">{{ $stockOut->description }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-neutral-500">Belum ada stok keluar.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Top incoming products</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($stockSummary as $summary)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $summary->name ?: 'Product #'.$summary->product }}</p>
                                        <p class="text-xs text-neutral-500">Product ID {{ $summary->product }}</p>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">
                                        {{ number_format((int) $summary->total_in) }}
                                    </span>
                                </div>
                            </div>
                        @empty
                            <p class="text-sm text-neutral-500">Belum ada ringkasan stok.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Next build target</h2>
                    <div class="mt-4 space-y-3 text-sm text-neutral-600 dark:text-neutral-300">
                        <p>Setelah inventory ini, kita bisa lanjut ke detail purchase order dan mutasi stok per produk.</p>
                        <p>Kalau Anda setuju, tahap berikut paling pas adalah membuat halaman detail PO dan ringkasan stok per produk/member.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
