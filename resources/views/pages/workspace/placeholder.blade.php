<x-layouts::app :title="$module['title']">
    <div class="space-y-6">
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <p class="text-sm uppercase tracking-[0.2em] text-neutral-500">Legacy Module</p>
            <h1 class="mt-3 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">{{ $module['title'] }}</h1>
            <p class="mt-2 max-w-3xl text-sm text-neutral-600 dark:text-neutral-300">{{ $module['description'] }}</p>
        </div>

        <div class="grid gap-4 lg:grid-cols-2">
            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Legacy Path</h2>
                <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-300">{{ $module['legacy_path'] }}</p>
            </div>

            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100">Next Step</h2>
                <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-300">{{ $module['next_step'] }}</p>
            </div>
        </div>

        <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-600 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            Halaman ini sengaja dipakai sebagai placeholder terstruktur agar menu Laravel bisa mengikuti menu asli aplikasi lama
            sambil kita migrasikan modul satu per satu tanpa kehilangan arah.
        </div>
    </div>
</x-layouts::app>
