<x-layouts::app :title="__('Dashboard')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">JP Buana Rebuild</p>
            <div class="mt-3 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Dashboard migrasi Laravel</h1>
                    <p class="mt-2 max-w-2xl text-sm text-neutral-600 dark:text-neutral-300">
                        Ringkasan ini membantu kita melihat mana modul yang sudah aktif, mana yang baru selesai dibersihkan
                        skemanya, dan mana yang siap dibangun berikutnya.
                    </p>
                </div>

                <a
                    href="{{ route('legacy.modules') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Open Legacy Mapping
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
            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Progress pembersihan schema</h2>
                        <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-300">
                            Batch rename tanpa prefix sedang kita dorong dari tabel inti ke tabel support.
                        </p>
                    </div>
                </div>

                <div class="mt-6 space-y-5">
                    @foreach ($migrationHealth as $item)
                        <div>
                            <div class="flex items-center justify-between gap-4 text-sm">
                                <span class="font-medium text-neutral-800 dark:text-neutral-100">{{ $item['label'] }}</span>
                                <span class="text-neutral-500">{{ $item['value'] }}/{{ $item['total'] }}</span>
                            </div>
                            <div class="mt-2 h-3 overflow-hidden rounded-full bg-neutral-200 dark:bg-neutral-800">
                                <div
                                    class="h-full rounded-full bg-emerald-500"
                                    style="width: {{ $item['total'] > 0 ? ($item['value'] / $item['total']) * 100 : 0 }}%"
                                ></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Prioritas modul</h2>
                <div class="mt-4 space-y-4">
                    @foreach ($legacyModules as $module)
                        <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                            <div class="flex items-center justify-between gap-3">
                                <h3 class="font-medium text-neutral-900 dark:text-neutral-100">{{ $module['module'] }}</h3>
                                <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">
                                    {{ $module['status'] }}
                                </span>
                            </div>
                            <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-300">{{ $module['notes'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
