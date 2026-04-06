<x-layouts::app title="Laporan Registrasi">
    <div class="space-y-6">
        {{-- Header --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-neutral-900 dark:text-neutral-100">Laporan Registrasi</h1>
                    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-300">Data pendaftaran member berdasarkan periode</p>
                </div>
            </div>
        </div>

        {{-- Filter Section --}}
        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="grid gap-4 md:grid-cols-5">
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Dari Tanggal</label>
                    <input type="date" class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Sampai Tanggal</label>
                    <input type="date" class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Status</label>
                    <select class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                        <option value="">Semua</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Package</label>
                    <select class="block w-full rounded-lg border border-neutral-300 px-3 py-2 text-sm dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-100">
                        <option value="">Semua</option>
                        <option value="gold">Gold</option>
                        <option value="silver">Silver</option>
                        <option value="bronze">Bronze</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="w-full rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                        Filter
                    </button>
                </div>
            </div>

            {{-- Summary --}}
            <div class="mt-6 grid gap-3 md:grid-cols-3 pt-4 border-t border-neutral-200 dark:border-neutral-700">
                <div class="flex justify-between">
                    <span class="text-sm text-neutral-600 dark:text-neutral-400">Total Registrasi</span>
                    <span class="font-semibold text-neutral-900 dark:text-neutral-100">{{ $totalRegistration ?? 0 }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm text-neutral-600 dark:text-neutral-400">Total Value</span>
                    <span class="font-semibold text-neutral-900 dark:text-neutral-100">Rp {{ number_format($totalValue ?? 0, 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm text-neutral-600 dark:text-neutral-400">Rata-rata per Hari</span>
                    <span class="font-semibold text-neutral-900 dark:text-neutral-100">{{ number_format(($totalRegistration ?? 0) / max(1, ($daysInPeriod ?? 1)), 2, ',', '.') }}/hari</span>
                </div>
            </div>
        </div>

        {{-- Registration Table --}}
        <div class="rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Username</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Sponsor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Package</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-neutral-700 dark:text-neutral-300">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-700">
                        @forelse($registrations ?? [] as $key => $registration)
                        <tr class="hover:bg-neutral-50 dark:hover:bg-neutral-800">
                            <td class="px-6 py-3 text-sm text-neutral-900 dark:text-neutral-100">{{ $key + 1 }}</td>
                            <td class="px-6 py-3 text-sm text-neutral-900 dark:text-neutral-100">{{ $registration->datecreated ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm font-medium text-neutral-900 dark:text-neutral-100">{{ $registration->username ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm text-neutral-900 dark:text-neutral-100">{{ $registration->name ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm text-neutral-600 dark:text-neutral-400">{{ $registration->sponsor_uid ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm">
                                <span class="inline-flex rounded-full bg-purple-100 px-3 py-1 text-xs font-medium text-purple-800 dark:bg-purple-900 dark:text-purple-200">
                                    {{ $registration->package ?? 'Unknown' }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-sm">
                                @if($registration->status == 1)
                                <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-200">
                                    Aktif
                                </span>
                                @else
                                <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-200">
                                    Tidak Aktif
                                </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-sm text-neutral-600 dark:text-neutral-400">
                                Tidak ada data registrasi
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Help Section --}}
        <div class="rounded-2xl border border-dashed border-neutral-300 bg-white p-6 text-sm text-neutral-600 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <p><strong>Catatan:</strong> Laporan ini menampilkan data pendaftaran member dalam periode yang dipilih. Gunakan filter untuk analisis lebih detail berdasarkan status, package, atau sponsor.</p>
        </div>
    </div>
</x-layouts::app>