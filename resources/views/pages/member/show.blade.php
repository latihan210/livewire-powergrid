<x-layouts::app :title="__('Member Detail')">
    <div class="space-y-6">
        <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
            <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                <div>
                    <p class="text-sm text-neutral-500">Member</p>
                    <h1 class="text-2xl font-semibold text-neutral-900 dark:text-neutral-100">{{ $member->name }}</h1>
                    <p class="text-sm uppercase tracking-wide text-neutral-500">{{ $member->username }}</p>
                </div>

                <a
                    href="{{ route('member') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition hover:bg-neutral-50 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800"
                >
                    Back to members
                </a>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-sm font-semibold uppercase tracking-wide text-neutral-500">Account</h2>
                <dl class="mt-4 space-y-3 text-sm">
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Email</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->email ?: '-' }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Phone</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->phone ?: '-' }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Rank</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ ucfirst($member->rank ?: 'member') }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Status</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->status }}</dd>
                    </div>
                </dl>
            </div>

            <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="text-sm font-semibold uppercase tracking-wide text-neutral-500">Network</h2>
                <dl class="mt-4 space-y-3 text-sm">
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Sponsor</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->sponsorData?->username ?: '-' }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Upline</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->upline?->username ?: '-' }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Position</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->position ?: '-' }}</dd>
                    </div>
                    <div class="flex items-start justify-between gap-4">
                        <dt class="text-neutral-500">Joined</dt>
                        <dd class="text-right text-neutral-900 dark:text-neutral-100">{{ $member->datecreated?->format('d M Y H:i') ?: '-' }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-layouts::app>
