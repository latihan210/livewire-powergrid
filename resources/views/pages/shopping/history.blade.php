<x-layouts::app :title="__('Riwayat Belanja')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Shopping History</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Riwayat belanja {{ $member->username }}</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Halaman ini menampilkan order member dari tabel order yang sudah kita rapikan, jadi admin dan member bisa mulai audit histori belanja langsung dari Laravel.
                    </p>
                </div>

                <a
                    href="{{ route('shopping.shop') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Belanja Lagi
                </a>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-neutral-500">Total Order</p>
                <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">{{ number_format($summary['orders']) }}</p>
            </div>
            <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-neutral-500">Total Qty</p>
                <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">{{ number_format($summary['total_qty']) }}</p>
            </div>
            <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm text-neutral-500">Total Belanja</p>
                <p class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Rp {{ number_format((int) $summary['total_spend'], 0, ',', '.') }}</p>
            </div>
        </div>

        <div class="space-y-4">
            @forelse ($orders as $order)
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">{{ $order->invoice ?: 'Order #'.$order->id }}</h2>
                            <p class="mt-1 text-sm text-neutral-500">{{ $order->datecreated?->format('d M Y H:i') ?: '-' }}</p>
                        </div>

                        <div class="flex flex-wrap items-center gap-2 text-xs font-semibold">
                            <span class="rounded-full bg-neutral-100 px-3 py-1 text-neutral-700 dark:bg-neutral-800 dark:text-neutral-200">
                                Qty {{ number_format((int) $order->total_qty) }}
                            </span>
                            <span class="rounded-full bg-sky-100 px-3 py-1 text-sky-800">
                                Rp {{ number_format((int) $order->total_payment, 0, ',', '.') }}
                            </span>
                            <span class="rounded-full px-3 py-1 {{ match ((int) $order->status) { 1 => 'bg-emerald-100 text-emerald-800', 2 => 'bg-sky-100 text-sky-800', 4 => 'bg-rose-100 text-rose-800', default => 'bg-amber-100 text-amber-800' } }}">
                                {{ match ((int) $order->status) { 1 => 'Confirmed', 2 => 'Done', 4 => 'Cancelled', default => 'Review' } }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-4 overflow-x-auto">
                        <table class="min-w-full divide-y divide-neutral-200 text-sm dark:divide-neutral-700">
                            <thead>
                                <tr class="text-left text-neutral-500">
                                    <th class="py-3 pr-4 font-medium">Produk</th>
                                    <th class="py-3 pr-4 font-medium">Qty</th>
                                    <th class="py-3 pr-4 font-medium">Harga</th>
                                    <th class="py-3 font-medium">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800">
                                @forelse ($order->items as $item)
                                    <tr>
                                        <td class="py-4 pr-4 text-neutral-900 dark:text-neutral-100">{{ $item->product?->name ?: 'Product #'.$item->product }}</td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ number_format((int) $item->qty) }}</td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">Rp {{ number_format((int) $item->price, 0, ',', '.') }}</td>
                                        <td class="py-4 text-neutral-700 dark:text-neutral-300">Rp {{ number_format((int) $item->subtotal, 0, ',', '.') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-6 text-center text-neutral-500">Belum ada item pada order ini.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @empty
                <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-500 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    Belum ada riwayat order untuk member ini.
                </div>
            @endforelse
        </div>
    </div>
</x-layouts::app>
