<x-layouts::app :title="__('Products & Packages')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Produk & Packages</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Master produk untuk modul baru</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Halaman ini menjadi titik awal migrasi modul produk dari aplikasi lama. Fokusnya masih di
                        katalog inti, status order, dan kesiapan data untuk inventory serta penjualan.
                    </p>
                </div>

                <a
                    href="{{ route('legacy.modules') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    View Mapping
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

        <div class="grid gap-4 xl:grid-cols-[1.2fr_0.8fr]">
            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent products</h2>
                        <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-300">
                            Produk terbaru dari master data yang sudah masuk ke schema Laravel.
                        </p>
                    </div>
                </div>

                <div class="mt-5 overflow-x-auto">
                    <table class="min-w-full divide-y divide-neutral-200 text-sm dark:divide-neutral-700">
                        <thead>
                            <tr class="text-left text-neutral-500">
                                <th class="py-3 pr-4 font-medium">Product</th>
                                <th class="py-3 pr-4 font-medium">Type</th>
                                <th class="py-3 pr-4 font-medium">Price</th>
                                <th class="py-3 pr-4 font-medium">BV</th>
                                <th class="py-3 pr-4 font-medium">Variants</th>
                                <th class="py-3 font-medium">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800">
                            @forelse ($products as $product)
                                <tr>
                                    <td class="py-4 pr-4">
                                        <div class="font-medium text-neutral-900 dark:text-neutral-100">{{ $product->name }}</div>
                                        <div class="text-xs text-neutral-500">{{ $product->sku ?: '-' }}</div>
                                    </td>
                                    <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ $product->type ?: '-' }}</td>
                                    <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                        Rp {{ number_format((int) $product->price, 0, ',', '.') }}
                                    </td>
                                    <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ number_format((int) $product->bv) }}</td>
                                    <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ $product->variants_count }}</td>
                                    <td class="py-4">
                                        @if ($product->status)
                                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Active</span>
                                        @else
                                            <span class="rounded-full bg-neutral-200 px-3 py-1 text-xs font-semibold text-neutral-700">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-8 text-center text-neutral-500">Belum ada data produk.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Packages snapshot</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($packages as $package)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $package->name }}</p>
                                        <p class="text-xs text-neutral-500">{{ $package->sku ?: '-' }}</p>
                                    </div>
                                    <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-800">
                                        {{ $package->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                                <div class="mt-3 grid grid-cols-2 gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                    <div>Total item: {{ number_format((int) $package->total_item) }}</div>
                                    <div>Total qty: {{ number_format((int) $package->total_qty) }}</div>
                                    <div>BV: {{ number_format((int) $package->bv) }}</div>
                                    <div>Price: Rp {{ number_format((int) $package->price, 0, ',', '.') }}</div>
                                </div>
                            </div>
                        @empty
                            <div class="rounded-xl border border-dashed border-neutral-300 p-5 text-sm text-neutral-500 dark:border-neutral-700">
                                Belum ada data package. Schema sudah siap, tinggal kita bangun flow input dan relasinya.
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Next build target</h2>
                    <div class="mt-4 space-y-3 text-sm text-neutral-600 dark:text-neutral-300">
                        <p>Inventory dan purchase order sudah punya schema baru, jadi modul produk ini siap disambungkan ke stok.</p>
                        <p>Setelah ini kita bisa lanjut ke grid inventory atau form detail produk agar admin mulai bisa melihat data operasional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
