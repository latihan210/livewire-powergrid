<x-layouts::app :title="__('Belanja Produk')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Shopping</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Katalog belanja member</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Halaman ini mengambil produk aktif yang sudah ditandai tampil di order, jadi member bisa mulai melihat
                        katalog nyata dari data legacy yang sudah kita pindahkan ke Laravel.
                    </p>
                </div>

                <a
                    href="{{ route('shopping.cart') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Lihat Keranjang
                </a>
            </div>
        </div>

        @if ($member)
            <div class="rounded-2xl border border-sky-200 bg-sky-50 p-5 text-sm text-sky-900 shadow-sm dark:border-sky-800 dark:bg-sky-950/30 dark:text-sky-100">
                Belanja aktif untuk member <span class="font-semibold">{{ $member->username }}</span>.
            </div>
        @endif

        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            @forelse ($products as $product)
                <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">{{ $product->name }}</h2>
                            <p class="mt-1 text-xs uppercase tracking-wide text-neutral-500">{{ $product->sku ?: 'No SKU' }}</p>
                        </div>
                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">
                            {{ $product->variants_count }} varian
                        </span>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                        <div>Harga: Rp {{ number_format((int) $product->price, 0, ',', '.') }}</div>
                        <div>BV: {{ number_format((int) $product->bv) }}</div>
                        <div>Berat: {{ number_format((int) $product->weight) }} gr</div>
                        <div>Tipe: {{ $product->type ?: '-' }}</div>
                    </div>

                    <p class="mt-4 text-sm text-neutral-500">
                        Form checkout belum kita aktifkan, tapi data katalog ini sudah real dan siap dipakai untuk modul cart berikutnya.
                    </p>
                </div>
            @empty
                <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-500 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 md:col-span-2 xl:col-span-3">
                    Belum ada produk aktif untuk shopping.
                </div>
            @endforelse
        </div>

        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Produk yang terakhir pernah dibeli</h2>
            <div class="mt-4 space-y-3">
                @forelse ($featured as $item)
                    <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $item->product?->name ?: 'Product #'.$item->product }}</p>
                                <p class="text-xs text-neutral-500">{{ $item->variant?->name ?: 'Varian default' }}</p>
                            </div>
                            <span class="rounded-full bg-neutral-100 px-3 py-1 text-xs font-semibold text-neutral-700 dark:bg-neutral-800 dark:text-neutral-200">
                                Qty {{ number_format((int) $item->qty) }}
                            </span>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-neutral-500">Belum ada histori pembelian untuk member ini.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts::app>
