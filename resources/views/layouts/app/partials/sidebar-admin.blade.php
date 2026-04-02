<flux:sidebar.group :heading="__('Data Member')" class="grid" />
<flux:sidebar.item icon="user-plus" :href="route('member.register')" :current="request()->routeIs('member.register')" wire:navigate>
    {{ __('Tambah Member Baru') }}
</flux:sidebar.item>
<flux:sidebar.item icon="users" :href="route('member')" :current="request()->routeIs('member')" wire:navigate>
    {{ __('List Member') }}
</flux:sidebar.item>
<flux:sidebar.item icon="hand-raised" :href="route('sponsor')" :current="request()->routeIs('sponsor')" wire:navigate>
    {{ __('List Sponsor') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'member', 'page' => 'generation'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'member' && request()->route('page') === 'generation'" wire:navigate>
    {{ __('Jaringan Generasi') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'member', 'page' => 'tree'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'member' && request()->route('page') === 'tree'" wire:navigate>
    {{ __('Jaringan Binary') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Komisi')" class="grid" />
<flux:sidebar.item icon="banknotes" :href="route('finance.index')" :current="request()->routeIs('finance.index')" wire:navigate>
    {{ __('Bonus Detail') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'commission', 'page' => 'statement'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'commission' && request()->route('page') === 'statement'" wire:navigate>
    {{ __('Statement Komisi') }}
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

<flux:sidebar.group :heading="__('Data Produk Order')" class="grid" />
<flux:sidebar.item icon="shopping-bag" :href="route('workspace.show', ['group' => 'pin', 'page' => 'generate'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin' && request()->route('page') === 'generate'" wire:navigate>
    {{ __('Kirim Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="archive-box" :href="route('workspace.show', ['group' => 'pin', 'page' => 'datalists'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin' && request()->route('page') === 'datalists'" wire:navigate>
    {{ __('Stock Produk Member') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'pin', 'page' => 'historylist'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin' && request()->route('page') === 'historylist'" wire:navigate>
    {{ __('History Kirim Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="shopping-bag" :href="route('workspace.show', ['group' => 'pin', 'page' => 'sales'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'pin' && request()->route('page') === 'sales'" wire:navigate>
    {{ __('Orderan ke Perusahaan') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Laporan')" class="grid" />
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'registration'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'registration'" wire:navigate>
    {{ __('Pendaftaran') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'historyro'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'historyro'" wire:navigate>
    {{ __('History RO') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'pairing'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'pairing'" wire:navigate>
    {{ __('Poin Pasangan') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'omzetdaily'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'omzetdaily'" wire:navigate>
    {{ __('Omzet Posting Daily') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'omzetmonthly'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'omzetmonthly'" wire:navigate>
    {{ __('Omzet Posting Monthly') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'omzetorder'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'omzetorder'" wire:navigate>
    {{ __('Omzet Order') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'budgeting'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'budgeting'" wire:navigate>
    {{ __('Budgeting') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'report', 'page' => 'tax'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'report' && request()->route('page') === 'tax'" wire:navigate>
    {{ __('Tax') }}
</flux:sidebar.item>
<flux:sidebar.item icon="gift" :href="route('rewards.index')" :current="request()->routeIs('rewards.index')" wire:navigate>
    {{ __('Reward') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Master Product')" class="grid" />
<flux:sidebar.item icon="shopping-bag" :href="route('products.index')" :current="request()->routeIs('products.index')" wire:navigate>
    {{ __('Master Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="archive-box" :href="route('workspace.show', ['group' => 'productmanage', 'page' => 'supplierlist'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'productmanage' && request()->route('page') === 'supplierlist'" wire:navigate>
    {{ __('Supplier') }}
</flux:sidebar.item>
<flux:sidebar.item icon="archive-box" :href="route('inventory.index')" :current="request()->routeIs('inventory.index')" wire:navigate>
    {{ __('Pembelian Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="archive-box" :href="route('inventory.index')" :current="request()->routeIs('inventory.index')" wire:navigate>
    {{ __('Laporan Stok Produk') }}
</flux:sidebar.item>
<flux:sidebar.item icon="archive-box" :href="route('workspace.show', ['group' => 'productmanage', 'page' => 'stockadjustmentlist'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'productmanage' && request()->route('page') === 'stockadjustmentlist'" wire:navigate>
    {{ __('Penyesuaian Stok') }}
</flux:sidebar.item>

<flux:sidebar.group :heading="__('Master CMS')" class="grid" />
<flux:sidebar.item icon="users" :href="route('workspace.show', ['group' => 'staff', 'page' => 'manage'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'staff' && request()->route('page') === 'manage'" wire:navigate>
    {{ __('Master Staff') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'news', 'page' => 'index'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'news' && request()->route('page') === 'index'" wire:navigate>
    {{ __('News') }}
</flux:sidebar.item>
<flux:sidebar.item icon="cog" :href="route('workspace.show', ['group' => 'setting', 'page' => 'general'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'setting' && request()->route('page') === 'general'" wire:navigate>
    {{ __('Data Perusahaan') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'setting', 'page' => 'notification'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'setting' && request()->route('page') === 'notification'" wire:navigate>
    {{ __('Notifikasi') }}
</flux:sidebar.item>
<flux:sidebar.item icon="gift" :href="route('rewards.index')" :current="request()->routeIs('rewards.index')" wire:navigate>
    {{ __('Setting Reward') }}
</flux:sidebar.item>
<flux:sidebar.item icon="banknotes" :href="route('workspace.show', ['group' => 'setting', 'page' => 'cfgwithdraw'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'setting' && request()->route('page') === 'cfgwithdraw'" wire:navigate>
    {{ __('Setting Withdraw') }}
</flux:sidebar.item>
<flux:sidebar.item icon="rectangle-stack" :href="route('workspace.show', ['group' => 'setting', 'page' => 'video'])" :current="request()->routeIs('workspace.show') && request()->route('group') === 'setting' && request()->route('page') === 'video'" wire:navigate>
    {{ __('Video') }}
</flux:sidebar.item>
