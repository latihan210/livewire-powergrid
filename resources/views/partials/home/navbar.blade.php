<flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">

    <x-app-logo class="mt-2" href="{{ route('home') }}" wire:navigate />

    <flux:spacer />

    <flux:navbar class="hidden lg:flex me-1.5 space-x-0.5 rtl:space-x-reverse !py-0 mt-2">
        <flux:navbar.item :href="route('home')" :current="request()->routeIs('home')" wire:navigate>
            {{ __('Home') }}
        </flux:navbar.item>
        <flux:navbar.item :href="route('about')" :current="request()->routeIs('about')" wire:navigate>
            {{ __('About') }}
        </flux:navbar.item>
        <flux:navbar.item :href="route('product')" :current="request()->routeIs('product')" wire:navigate>
            {{ __('Product') }}
        </flux:navbar.item>
        <flux:navbar.item :href="route('opportunity')" :current="request()->routeIs('opportunity')" wire:navigate>
            {{ __('Opportunity') }}
        </flux:navbar.item>
        <flux:navbar.item :href="route('edukasi')" :current="request()->routeIs('edukasi')" wire:navigate>
            {{ __('Edukasi') }}
        </flux:navbar.item>
        <flux:navbar.item :href="route('contact')" :current="request()->routeIs('contact')" wire:navigate>
            {{ __('Contact') }}
        </flux:navbar.item>
        <flux:navbar.item :href="route('login')" wire:navigate>
            {{ __('Login') }}
        </flux:navbar.item>
    </flux:navbar>

    <flux:dropdown class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200">
        <flux:button icon="bars-2" variant="ghost" aria-label="Open menu" />
        <flux:menu class="w-[95vw] sm:w-80 border-b border-zinc-200 bg-zinc-50 dark:bg-zinc-900 shadow-xl">
            <flux:navlist.item :href="route('home')" :current="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </flux:navlist.item>
            <flux:navlist.item :href="route('about')" :current="request()->routeIs('about')" wire:navigate>
                {{ __('About') }}
            </flux:navlist.item>
            <flux:navlist.item :href="route('product')" :current="request()->routeIs('product')" wire:navigate>
                {{ __('Product') }}
            </flux:navlist.item>
            <flux:navlist.item :href="route('opportunity')" :current="request()->routeIs('opportunity')" wire:navigate>
                {{ __('Opportunity') }}
            </flux:navlist.item>
            <flux:navlist.item :href="route('edukasi')" :current="request()->routeIs('edukasi')" wire:navigate>
                {{ __('Edukasi') }}
            </flux:navlist.item>
            <flux:navlist.item :href="route('contact')" :current="request()->routeIs('contact')" wire:navigate>
                {{ __('Contact') }}
            </flux:navlist.item>
            <flux:navlist.item :href="route('login')" wire:navigate>
                {{ __('Login') }}
            </flux:navlist.item>
        </flux:menu>
    </flux:dropdown>
</flux:header>