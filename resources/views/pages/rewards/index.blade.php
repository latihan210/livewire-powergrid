<x-layouts::app :title="__('Rewards & Points')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Rewards & Points</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Landing page modul reward</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Modul ini menyiapkan area reward agar konfigurasi, point, dan claim nanti bisa dibangun di atas
                        schema Laravel yang sudah bersih. Saat ini data reward masih tipis, tapi fondasinya sudah ada.
                    </p>
                </div>

                <a
                    href="{{ route('finance.index') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Back to Finance
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

        <div class="grid gap-4 xl:grid-cols-[1.1fr_0.9fr]">
            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Reward configs</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($rewardConfigs as $config)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $config->reward }}</p>
                                        <p class="text-xs text-neutral-500">{{ $config->type }} · point {{ number_format((int) $config->point) }}</p>
                                    </div>
                                    <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $config->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-neutral-200 text-neutral-700' }}">
                                        {{ $config->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                                <p class="mt-2 text-xs text-neutral-500">
                                    {{ $config->message ?: 'Belum ada deskripsi reward.' }}
                                </p>
                            </div>
                        @empty
                            <div class="rounded-xl border border-dashed border-neutral-300 p-5 text-sm text-neutral-500 dark:border-neutral-700">
                                Belum ada data reward config. Ini normal untuk tahap awal jika data reward belum diimpor penuh.
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Top reward points</h2>
                    <div class="mt-5 overflow-x-auto">
                        <table class="min-w-full divide-y divide-neutral-200 text-sm dark:divide-neutral-700">
                            <thead>
                                <tr class="text-left text-neutral-500">
                                    <th class="py-3 pr-4 font-medium">Member</th>
                                    <th class="py-3 pr-4 font-medium">Package</th>
                                    <th class="py-3 pr-4 font-medium">Type</th>
                                    <th class="py-3 font-medium">Point</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800">
                                @forelse ($rewardPoints as $point)
                                    <tr>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">
                                            {{ $point->member?->username ?: 'Member #'.$point->id_member }}
                                        </td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ $point->package }}</td>
                                        <td class="py-4 pr-4 text-neutral-700 dark:text-neutral-300">{{ $point->type }}</td>
                                        <td class="py-4 text-neutral-700 dark:text-neutral-300">{{ number_format((float) $point->point, 2) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-8 text-center text-neutral-500">Belum ada data reward point.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Reward claims</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($rewards as $reward)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">
                                            {{ $reward->member?->username ?: 'Member #'.$reward->id_member }}
                                        </p>
                                        <p class="text-xs text-neutral-500">{{ $reward->type ?: 'reward' }} · {{ $reward->rank ?: '-' }}</p>
                                    </div>
                                    <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">
                                        {{ (int) $reward->status === 1 ? 'Confirmed' : 'Pending' }}
                                    </span>
                                </div>
                                <p class="mt-2 text-xs text-neutral-500">{{ $reward->message }}</p>
                            </div>
                        @empty
                            <div class="rounded-xl border border-dashed border-neutral-300 p-5 text-sm text-neutral-500 dark:border-neutral-700">
                                Belum ada reward claim. Nanti modul ini bisa diisi saat flow reward sudah dipindahkan penuh.
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Point summary</h2>
                    <div class="mt-4 space-y-3">
                        @forelse ($pointSummary as $summary)
                            <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $summary->type }}</p>
                                        <p class="text-xs text-neutral-500">{{ number_format((int) $summary->total_rows) }} entries</p>
                                    </div>
                                    <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-800">
                                        {{ number_format((float) $summary->total_points, 2) }}
                                    </span>
                                </div>
                            </div>
                        @empty
                            <p class="text-sm text-neutral-500">Belum ada ringkasan reward point.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Next build target</h2>
                    <div class="mt-4 space-y-3 text-sm text-neutral-600 dark:text-neutral-300">
                        <p>Langkah berikutnya paling cocok adalah membuat CRUD reward config dan laporan point per member.</p>
                        <p>Kalau data reward penuh nanti sudah masuk, halaman ini siap berkembang jadi modul reward qualified dan claim approval.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
