<x-layouts::app title="Member Summary">
    <div class="space-y-6">
        {{-- Header --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Member Summary</h1>
            <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-300">Overview statistik member dan distribusi rank</p>
        </div>

        {{-- Statistics Cards --}}
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            @php
            $stats = [
            ['label' => 'Total Members', 'value' => $totalMembers ?? 0, 'color' => 'blue'],
            ['label' => 'Active Members', 'value' => $activeMembers ?? 0, 'color' => 'green'],
            ['label' => 'Total Omzet', 'value' => 'Rp ' . number_format($totalOmzet ?? 0, 0, ',', '.'), 'color' => 'purple'],
            ['label' => 'Avg Omzet', 'value' => 'Rp ' . number_format($avgOmzet ?? 0, 0, ',', '.'), 'color' => 'orange'],
            ];
            @endphp
            @foreach($stats as $stat)
            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <p class="text-sm font-medium text-neutral-600 dark:text-neutral-400">{{ $stat['label'] }}</p>
                <p class="mt-2 text-2xl font-bold text-neutral-900 dark:text-neutral-100">
                    @if(is_numeric($stat['value']))
                    {{ is_int($stat['value']) ? number_format($stat['value'], 0, ',', '.') : $stat['value'] }}
                    @else
                    {{ $stat['value'] }}
                    @endif
                </p>
            </div>
            @endforeach
        </div>

        {{-- Rank Distribution & New Members --}}
        <div class="grid gap-4 lg:grid-cols-2">
            {{-- Rank Distribution --}}
            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Distribusi Rank</h2>
                <div class="mt-4 space-y-3">
                    @forelse($rankDistribution ?? [] as $rank)
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-neutral-700 dark:text-neutral-300">{{ $rank['package'] ?? 'Unknown' }}</span>
                        <div class="flex items-center gap-2">
                            <div class="h-2 w-32 overflow-hidden rounded-full bg-neutral-200 dark:bg-neutral-700">
                                <div
                                    class="h-full bg-blue-500"
                                    style="width: {{ ($rank['count'] ?? 0) / max(1, collect($rankDistribution)->max('count')) * 100 }}%"></div>
                            </div>
                            <span class="text-sm font-semibold text-neutral-900 dark:text-neutral-100 w-12 text-right">
                                {{ $rank['count'] ?? 0 }}
                            </span>
                        </div>
                    </div>
                    @empty
                    <p class="text-sm text-neutral-500">Tidak ada data</p>
                    @endforelse
                </div>
            </div>

            {{-- Recent Activity --}}
            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">7 Hari Terakhir</h2>
                <div class="mt-4 space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-neutral-600 dark:text-neutral-400">Member Baru (7 hari)</span>
                        <span class="font-semibold text-neutral-900 dark:text-neutral-100">{{ $newMembers7Days ?? 0 }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-neutral-600 dark:text-neutral-400">Total Registrasi Bulan Ini</span>
                        <span class="font-semibold text-neutral-900 dark:text-neutral-100">{{ $newMembersMonth ?? 0 }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-neutral-600 dark:text-neutral-400">Omzet Bulan Ini</span>
                        <span class="font-semibold text-neutral-900 dark:text-neutral-100">
                            Rp {{ number_format($omzetMonth ?? 0, 0, ',', '.') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Details Section --}}
        <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-600 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <p><strong>Catatan:</strong> Summary ini menampilkan data agregasi member dari seluruh sistem. Gunakan menu List Member atau Jaringan untuk melihat detail lebih lengkap.</p>
        </div>
    </div>
</x-layouts::app>