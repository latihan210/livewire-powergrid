<flux:sidebar.group :heading="__('Data Member')" class="grid" />
<flux:sidebar.item icon="user-plus" :href="route('member.register')" :current="request()->routeIs('member.register')"
    wire:navigate>
    {{ __('Tambah Member Baru') }}
</flux:sidebar.item>
<flux:sidebar.item icon="users" :href="route('member')" :current="request()->routeIs('member')" wire:navigate>
    {{ __('List Member') }}
</flux:sidebar.item>
<flux:sidebar.item icon="users" :href="route('group')"
    :current="request()->routeIs('group')"
    wire:navigate>
    {{ __('List Group Member') }}
</flux:sidebar.item>
<flux:sidebar.item icon="trophy" :href="route('rank')"
    :current="request()->routeIs('rank')"
    wire:navigate>
    {{ __('Member Rank') }}
</flux:sidebar.item>
<flux:sidebar.item icon="chart-pie" :href="route('summary')"
    :current="request()->routeIs('summary')"
    wire:navigate>
    {{ __('Member Summary') }}
</flux:sidebar.item>
<flux:sidebar.item icon="hand-raised" :href="route('sponsor')" :current="request()->routeIs('sponsor')" wire:navigate>
    {{ __('List Sponsor') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('generation')" :current="request()->routeIs('generation')"
    wire:navigate>
    {{ __('Jaringan Generasi') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('tree')"
    :current="request()->routeIs('tree')"
    wire:navigate>
    {{ __('Jaringan Binary') }}
</flux:sidebar.item>