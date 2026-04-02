<x-layouts::app :title="__('Bonuses, Wallet & Withdraw')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Bonuses, Wallet & Withdraw</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Ringkasan finansial dari data legacy</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Modul ini menjadi jendela awal untuk bonus, mutasi e-wallet, transfer wallet, dan withdraw.
                        Data diambil langsung dari schema baru yang sudah dibersihkan tanpa prefix.
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
                        Rp {{ number_format((int) $stat['value'], 0, ',', '.') }}
                    </p>
                    <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-300">{{ $stat['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="grid gap-4 xl:grid-cols-[1.1fr_0.9fr]">
            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent bonuses</h2>
                    <div class="mt-5 overflow-x-auto">
                        <table class="min-w-full divide-y divide-neutral-200 text-sm dark:divide-neutral-700">
                            <thead>
                                <tr class="text-left text-neutral-500">
                                    <th class="py-3 pr-4 font-medium">Code</th>
                                    <th class="py-3 pr-4 font-medium">Member</th>
                                    <th class="py-3 pr-4 font-medium">Type</th>
                                    <th class="py-3 pr-4 font-medium">Amount</th>
                                    <th class="py-3 font-medium">Net</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800">
                                @forelse ($recentBonuses as $bonus)
                                    <tr>
                                        <td class="py-4 pr-4">
                                            <div class="font-medium text-neutral-900 dark:text-neutral-100">{{ $bonus->id_bonus }}</div>
                                            <div class="text-xs text-neutral-500">{{ $bonus->datecreated?->format('d M Y H:i') ?: '-' }}</div>
                                        </td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                            {{ $bonus->member?->username ?: 'Member #'.$bonus->id_member }}
                                        </td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                            {{ match ((int) $bonus->type) { 1 => 'Sponsor', 2 => 'Pairing', default => 'Other' } }}
                                        </td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                            Rp {{ number_format((int) $bonus->amount, 0, ',', '.') }}
                                        </td>
                                        <td class="py-4 text-neutral-700 dark:text-neutral-300">
                                            Rp {{ number_format((int) $bonus->amount_tax, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-8 text-center text-neutral-500">Belum ada data bonus.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent wallet transactions</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($recentWalletTransactions as $transaction)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">
                                            {{ $transaction->member?->username ?: 'Member #'.$transaction->id_member }}
                                        </p>
                                        <p class="text-xs text-neutral-500">{{ strtoupper($transaction->source) }} · {{ $transaction->category }}</p>
                                    </div>
                                    <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $transaction->type === 'IN' ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                                        {{ $transaction->type }} Rp {{ number_format((int) $transaction->amount, 0, ',', '.') }}
                                    </span>
                                </div>
                                <p class="mt-2 text-xs text-neutral-500">{{ $transaction->description }}</p>
                            </div>
                        @empty
                            <p class="text-sm text-neutral-500">Belum ada mutasi wallet.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Recent withdrawals</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($recentWithdrawals as $withdrawal)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">
                                            {{ $withdrawal->member?->username ?: 'Member #'.$withdrawal->id_member }}
                                        </p>
                                        <p class="text-xs text-neutral-500">{{ strtoupper($withdrawal->type ?: 'withdraw') }} · {{ $withdrawal->bank_name ?: 'Bank' }}</p>
                                    </div>
                                    <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">
                                        Rp {{ number_format((int) $withdrawal->nominal_receipt, 0, ',', '.') }}
                                    </span>
                                </div>
                                <p class="mt-2 text-xs text-neutral-500">{{ $withdrawal->bill_name }} · {{ $withdrawal->bill }}</p>
                            </div>
                        @empty
                            <p class="text-sm text-neutral-500">Belum ada withdraw.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Bonus breakdown</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($bonusBreakdown as $item)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">
                                            {{ match ((int) $item->type) { 1 => 'Sponsor Bonus', 2 => 'Pairing Bonus', default => 'Other Bonus' } }}
                                        </p>
                                        <p class="text-xs text-neutral-500">{{ number_format((int) $item->total_rows) }} transaksi</p>
                                    </div>
                                    <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-800">
                                        Rp {{ number_format((int) $item->total_amount, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        @empty
                            <p class="text-sm text-neutral-500">Belum ada breakdown bonus.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Wallet transfers</h2>
                    <div class="mt-4 space-y-3 text-sm text-neutral-600 dark:text-neutral-300">
                        @forelse ($walletTransfers as $transfer)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <p class="font-medium text-neutral-900 dark:text-neutral-100">
                                    {{ $transfer->username_sender }} -> {{ $transfer->username }}
                                </p>
                                <p class="mt-1 text-xs text-neutral-500">
                                    Rp {{ number_format((int) $transfer->nominal_receipt, 0, ',', '.') }}
                                </p>
                            </div>
                        @empty
                            <p>Belum ada data transfer wallet. Tabelnya sudah siap untuk modul lanjutan.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
