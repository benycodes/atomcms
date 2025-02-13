<div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 items-center flex justify-between py-2">
    <div class="flex gap-x-6">
        <x-top-header-currency icon="nav-credit-icon">
            <x-slot:currency>
                {{ auth()->user()->credits }}
            </x-slot:currency>

            {{ __('Credits') }}
        </x-top-header-currency>

        <x-top-header-currency icon="nav-ducket-icon">
            <x-slot:currency>
                {{ auth()->user()->currency('duckets') }}
            </x-slot:currency>

            {{ __('Duckets') }}
        </x-top-header-currency>

        <x-top-header-currency icon="nav-diamond-icon">
            <x-slot:currency>
                {{ auth()->user()->currency('diamonds') }}
            </x-slot:currency>

            {{ __('Diamonds') }}
        </x-top-header-currency>
    </div>


    <x-navigation.user-dropdown>
        <span class="h-10">
            <img class="w-8 mt-1" src="{{ setting('avatar_imager') }}{{ auth()->user()->look }}&direction=2&headonly=1&head_direction=2&gesture=sml" alt="">
        </span>

        <span>{{ auth()->user()->username }}</span>
    </x-navigation.user-dropdown>
</div>