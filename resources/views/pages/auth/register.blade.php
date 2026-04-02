<x-layouts::app :title="__('Register')">
    <div class="flex flex-col gap-6">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6">
                    {{--
                    <x-auth-header :title="__('Create an account')"
                        :description="__('Enter your details below to create your account')" /> --}}

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form method="POST"
                        action="{{ auth()->check() ? route('member.register.store') : route('register.store') }}"
                        class="flex flex-col gap-6">
                        @csrf
                        <!-- Name -->
                        <flux:input name="name" :label="__('Name')" :value="old('name')" type="text" required autofocus
                            autocomplete="name" :placeholder="__('Full name')" />

                        <!-- Email Address -->
                        <flux:input name="email" :label="__('Email address')" :value="old('email')" type="email"
                            required autocomplete="email" placeholder="email@example.com" />

                        <!-- Password -->
                        <flux:input name="password" :label="__('Password')" type="password" required
                            autocomplete="new-password" :placeholder="__('Password')" viewable />

                        <!-- Confirm Password -->
                        <flux:input name="password_confirmation" :label="__('Confirm password')" type="password"
                            required autocomplete="new-password" :placeholder="__('Confirm password')" viewable />

                        <div class="flex items-center justify-center gap-2">
                            <flux:button type="submit" variant="primary" data-test="register-user-button">
                                {{ __('Create account') }}
                            </flux:button>
                            <flux:button :href="url()->previous()" type="button" variant="ghost">
                                {{ __('Cancel') }}
                            </flux:button>
                        </div>
                    </form>

                    {{-- <div
                        class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
                        <span>{{ __('Already have an account?') }}</span>
                        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>