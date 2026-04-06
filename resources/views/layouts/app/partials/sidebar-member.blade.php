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
<flux:sidebar.item icon="user-group" :href="route('workspace.show', ['group' => 'network', 'page' => 'generation'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'network' && request()->route('page') === 'generation'" wire:navigate>
    {{ __('Jaringan Generasi') }}
</flux:sidebar.item>
<flux:sidebar.item icon="diagram-project" :href="route('workspace.show', ['group' => 'network', 'page' => 'tree'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'network' && request()->route('page') === 'tree'" wire:navigate>
    {{ __('Jaringan Binary') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Keuangan')" class="grid" />
<flux:sidebar.item icon="banknotes" :href="route('finance.index')" :current="request()->routeIs('finance.index')" wire:navigate>
    {{ __('Detail Bonus') }}
</flux:sidebar.item>
<flux:sidebar.item icon="chart-bar" :href="route('workspace.show', ['group' => 'commission', 'page' => 'statement'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'commission' && request()->route('page') === 'statement'" wire:navigate>
    {{ __('Statement Komisi') }}
</flux:sidebar.item>
<flux:sidebar.item icon="wallet" :href="route('wallet.index')" :current="request()->routeIs('wallet.index')" wire:navigate>
    {{ __('E-Wallet') }}
</flux:sidebar.item>
<flux:sidebar.item icon="arrow-path" :href="route('workspace.show', ['group' => 'commission', 'page' => 'autoro'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'commission' && request()->route('page') === 'autoro'" wire:navigate>
    {{ __('Auto RO') }}
</flux:sidebar.item>
<flux:sidebar.item icon="arrow-up-tray" :href="route('withdrawal.index')" :current="request()->routeIs('withdrawal.index')" wire:navigate>
    {{ __('Withdrawal') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Produk')" class="grid" />
<flux:sidebar.item icon="archive-box" :href="route('workspace.show', ['group' => 'pin-member', 'page' => 'datalists'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin-member' && request()->route('page') === 'datalists'" wire:navigate>
    {{ __('Stok Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="arrow-left-right" :href="route('workspace.show', ['group' => 'pin-member', 'page' => 'transfer'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin-member' && request()->route('page') === 'transfer'" wire:navigate>
    {{ __('Transfer Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="clock" :href="route('workspace.show', ['group' => 'pin-member', 'page' => 'historylist'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin-member' && request()->route('page') === 'historylist'" wire:navigate>
    {{ __('Riwayat Pengiriman') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Belanja')" class="grid" />
<flux:sidebar.item icon="shopping-cart" :href="route('shopping.cart')" :current="request()->routeIs('shopping.cart')" wire:navigate>
    {{ __('Keranjang Belanja') }}
</flux:sidebar.item>
<flux:sidebar.item icon="shopping-bag" :href="route('shopping.shop')" :current="request()->routeIs('shopping.shop')" wire:navigate>
    {{ __('Toko Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="receipt" :href="route('shopping.history')" :current="request()->routeIs('shopping.history')" wire:navigate>
    {{ __('Riwayat Pembelian') }}
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