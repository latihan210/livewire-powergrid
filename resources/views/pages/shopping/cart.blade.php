<x-layouts::app :title="__('Keranjang Belanja')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Cart</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Keranjang member {{ $member->username }}</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Halaman ini membaca isi tabel cart langsung, jadi kita bisa audit isi keranjang member tanpa pindah aplikasi.
                    </p>
                </div>

                <a
                    href="{{ route('shopping.shop') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Kembali ke Belanja
                </a>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-neutral-500">Baris Cart</p>
                <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">{{ number_format($summary['items']) }}</p>
            </div>
            <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-neutral-500">Total Qty</p>
                <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">{{ number_format($summary['qty']) }}</p>
            </div>
            <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-neutral-500">Subtotal</p>
                <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Rp {{ number_format((int) $summary['subtotal'], 0, ',', '.') }}</p>
            </div>
        </div>

        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-neutral-200 text-sm dark:divide-neutral-700">
                    <thead>
                        <tr class="text-left text-neutral-500">
                            <th class="py-3 pr-4 font-medium">Produk</th>
                            <th class="py-3 pr-4 font-medium">Varian</th>
                            <th class="py-3 pr-4 font-medium">Qty</th>
                            <th class="py-3 pr-4 font-medium">Harga</th>
                            <th class="py-3 font-medium">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800">
                        @forelse ($cartItems as $item)
                            <tr>
                                <td class="py-4 pr-4">
                                    <div class="font-medium text-neutral-900 dark:text-neutral-100">{{ $item->product?->name ?: $item->name ?: 'Produk' }}</div>
                                    <div class="text-xs text-neutral-500">{{ $item->cart_code }}</div>
                                </td>
                                <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ $item->variant?->name ?: '-' }}</td>
                                <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ number_format((int) $item->qty) }}</td>
                                <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">Rp {{ number_format((int) $item->price, 0, ',', '.') }}</td>
                                <td class="py-4 text-neutral-700 dark:text-neutral-300">Rp {{ number_format((int) $item->subtotal, 0, ',', '.') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-neutral-500">Keranjang masih kosong.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts::app>
