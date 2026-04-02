<x-layouts::app.sidebar :title="$title ?? null">
    <flux:main>
        @if (session()->has('impersonator_id'))
        <div
            class="mx-3 mb-4 rounded-xl border border-amber-200 bg-amber-50 p-3 text-sm text-amber-900 dark:border-amber-800 dark:bg-amber-950/40 dark:text-amber-100">
            <p class="font-semibold">Mode Member Aktif</p>
            <p class="mt-1 text-xs opacity-80">Anda sedang melihat aplikasi sebagai {{ auth()->user()->username ??
                auth()->user()->name }}.</p>
            <a href="{{ route('impersonation.stop') }}"
                class="mt-3 inline-flex items-center rounded-lg bg-amber-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-amber-700">
                Kembali ke Admin
            </a>
        </div>
        @endif
        {{ $slot }}
    </flux:main>
</x-layouts::app.sidebar>