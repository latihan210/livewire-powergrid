<flux:sidebar.group :heading="__('Member')" class="grid" />
<flux:sidebar.item icon="user-plus" :href="route('member.register')" :current="request()->routeIs('member.register')" wire:navigate>
    {{ __('Daftarkan Member') }}
</flux:sidebar.item>
<flux:sidebar.item icon="shopping-bag" :href="route('workspace.show', ['group' => 'member-portal', 'page' => 'ro'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'member-portal' && request()->route('page') === 'ro'" wire:navigate>
    {{ __('Repeat Order') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'member-portal', 'page' => 'registry'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'member-portal' && request()->route('page') === 'registry'" wire:navigate>
    {{ __('Riwayat Pendaftaran') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Jaringan')" class="grid" />
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'network', 'page' => 'generation'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'network' && request()->route('page') === 'generation'" wire:navigate>
    {{ __('Generasi') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'network', 'page' => 'tree'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'network' && request()->route('page') === 'tree'" wire:navigate>
    {{ __('Tree Binary') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Keuangan')" class="grid" />
<flux:sidebar.item icon="banknotes" :href="route('finance.index')" :current="request()->routeIs('finance.index')" wire:navigate>
    {{ __('Bonus') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'commission', 'page' => 'statement'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'commission' && request()->route('page') === 'statement'" wire:navigate>
    {{ __('Statement') }}
</flux:sidebar.item>
<flux:sidebar.item icon="banknotes" :href="route('finance.index')" :current="request()->routeIs('finance.index')" wire:navigate>
    {{ __('eWallet') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'commission', 'page' => 'autoro'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'commission' && request()->route('page') === 'autoro'" wire:navigate>
    {{ __('Auto RO') }}
</flux:sidebar.item>
<flux:sidebar.item icon="banknotes" :href="route('finance.index')" :current="request()->routeIs('finance.index')" wire:navigate>
    {{ __('Withdraw') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('PIN & Shopping')" class="grid" />
<flux:sidebar.item icon="archive-box" :href="route('workspace.show', ['group' => 'pin-member', 'page' => 'datalists'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin-member' && request()->route('page') === 'datalists'" wire:navigate>
    {{ __('Daftar Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="shopping-bag" :href="route('workspace.show', ['group' => 'pin-member', 'page' => 'transfer'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin-member' && request()->route('page') === 'transfer'" wire:navigate>
    {{ __('Transfer Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'pin-member', 'page' => 'historylist'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin-member' && request()->route('page') === 'historylist'" wire:navigate>
    {{ __('History Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="shopping-bag" :href="route('shopping.cart')" :current="request()->routeIs('shopping.cart')" wire:navigate>
    {{ __('Keranjang') }}
</flux:sidebar.item>
<flux:sidebar.item icon="shopping-bag" :href="route('shopping.shop')" :current="request()->routeIs('shopping.shop')" wire:navigate>
    {{ __('Belanja') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('shopping.history')" :current="request()->routeIs('shopping.history')" wire:navigate>
    {{ __('Riwayat Belanja') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Laporan')" class="grid" />
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'registration'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'registration'" wire:navigate>
    {{ __('Pendaftaran') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'historyro'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'historyro'" wire:navigate>
    {{ __('History RO') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'pairing'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'pairing'" wire:navigate>
    {{ __('Pairing') }}
</flux:sidebar.item>
<flux:sidebar.item icon="gift" :href="route('rewards.index')" :current="request()->routeIs('rewards.index')" wire:navigate>
    {{ __('Reward') }}
</flux:sidebar.item>
