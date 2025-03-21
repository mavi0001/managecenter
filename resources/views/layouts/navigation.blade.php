<nav x-data="{ open: false }" class="bg-[#191565] border-b ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-white hover:text-[#DB1E59]">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('minor_participants.index')" :active="request()->routeIs('minor_participants.*')"
                        class="text-white hover:text-[#DB1E59]">
                        {{ __('Minor Participants') }}
                    </x-nav-link>
                    <x-nav-link :href="route('adult-participants.index')" :active="request()->routeIs('adult-participants.*')"
                        class="text-white hover:text-[#DB1E59]">
                        {{ __('Adult Participants') }}
                    </x-nav-link>
                    <x-nav-link :href="route('minor-activities.index')" :active="request()->routeIs('minor-activities.*')"
                        class="text-white hover:text-[#DB1E59]">
                        {{ __('Minor Activities') }}
                    </x-nav-link>
                    <x-nav-link :href="route('adult-activities.index')" :active="request()->routeIs('adult-activities.*')"
                        class="text-white hover:text-[#DB1E59]">
                        {{ __('Adult Activities') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent
                        text-sm leading-4 font-medium rounded-md text-white bg-[#191565]
                        hover:text-[#DB1E59] focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-[#DB1E59]">
                            {{ __('My profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();" class="text-[#DB1E59]">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2
                rounded-md text-white hover:text-[#DB1E59]
                hover:bg-[#84D1C7] focus:outline-none focus:bg-[#84D1C7] focus:text-[#DB1E59] transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }"
                        class="inline-flex" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }"
                        class="hidden" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="text-white hover:text-[#DB1E59]">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-4 pb-1 border-t border-[#B2BABD]">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white hover:text-[#DB1E59]">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();" class="text-white hover:text-[#DB1E59]">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
