<button
    id="dropdownNavbarLink"
    data-dropdown-toggle="dropdownNavbarUser"
    class="ml-4 flex items-center">
    <span class="h-10">
        <img class="w-8 h-12 mt-1" src="{{ setting('avatar_imager') }}{{ auth()->user()->look }}&direction=2&headonly=1&head_direction=2&gesture=sml" alt="">
    </span>

    <span>{{ auth()->user()->username }}</span>

    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownNavbarUser" class="py-2 hidden z-10 w-44 bg-white shadow block">
    <a href="{{ route('settings.account.show') }}" class="block py-2 px-4 hover:bg-gray-100 font-semibold">
        {{ __('User settings') }}
    </a>

    @auth
        <a
            href="{{ route('logout') }}"
            class="block py-2 px-4 hover:bg-gray-100 font-semibold"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    @endauth
</div>