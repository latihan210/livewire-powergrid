<x-layouts::app :title="__('Legacy Modules Mapping')">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Legacy Mapping</p>
            <h1 class="mt-3 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">
                Pemetaan menu CI3 ke modul Laravel
            </h1>
            <p class="mt-2 max-w-3xl text-sm text-neutral-600 dark:text-neutral-300">
                Halaman ini jadi jembatan kerja kita saat memindahkan aplikasi lama ke Laravel. Tujuannya bukan cuma
                menyalin data, tapi memastikan setiap menu lama punya tujuan yang jelas di struktur baru.
            </p>
        </div>

        <div class="grid gap-4">
            @foreach ($modules as $module)
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="flex flex-col gap-3 lg:flex-row lg:items-start lg:justify-between">
                        <div>
                            <h2 class="text-xl font-semibold text-neutral-900 dark:text-neutral-100">{{ $module['legacy'] }}</h2>
                            <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-300">{{ $module['menus'] }}</p>
                        </div>
                        <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-800">
                            {{ $module['status'] }}
                        </span>
                    </div>

                    <div class="mt-5 grid gap-4 md:grid-cols-2">
                        <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                            <p class="text-xs font-semibold uppercase tracking-wide text-neutral-500">Laravel Status</p>
                            <p class="mt-2 text-sm text-neutral-800 dark:text-neutral-100">{{ $module['laravel'] }}</p>
                        </div>

                        <div class="rounded-xl border border-neutral-200 p-4 dark:border-neutral-700">
                            <p class="text-xs font-semibold uppercase tracking-wide text-neutral-500">Next Step</p>
                            <p class="mt-2 text-sm text-neutral-800 dark:text-neutral-100">{{ $module['next_step'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts::app>
