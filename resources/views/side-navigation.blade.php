<body
    x-data="sidebar()"
    class="bg-gray-200 text-gray-700"
    @resize.window="handleResize()"
>
<div class="xl:flex">
    <div
        x-show="isOpen()"
        class="fixed xl:static inset-0 flex bg-white bg-opacity-75 h-screen"
    >
        <div
            @click.away="handleAway()"
            class="w-80 text-white bg-gray-800 shadow"
        >
            <div class="flex bg-gray-900 content-between">
                <div class="p-3 w-full">Project Sidebar</div>
                <a
                    @click.prevent="handleClose()"
                    class="p-3 hover:bg-indigo-500 flex-1 flex items-center"
                    href="#"
                >
                    <svg
                        class="h-5 w-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </a>
            </div>
            <a
                class="flex items-center w-full p-3 hover:bg-indigo-500"
                href="#"
            >
                <svg
                    class="h-6 w-6 mr-3"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                </svg>
                Home
            </a>
            <a
                class="flex items-center w-full p-3 hover:bg-indigo-500"
                href="#"
            ><svg
                    class="h-6 w-6 mr-3"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
                    />
                </svg>
                Resources
            </a>
            <a
                class="flex items-center w-full p-3 hover:bg-indigo-500"
                href="#"
            ><svg
                    class="h-6 w-6 mr-3"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                    />
                </svg>
                Statistics
            </a>
            <a
                class="flex items-center w-full p-3 hover:bg-indigo-500"
                href="#"
            ><svg
                    class="h-6 w-6 mr-3"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg>
                Settings
            </a>
        </div>
    </div>
    <div>
        <nav class="text-gray-700 bg-white flex">
            <div x-show="!isOpen()" class="flex">
                <a
                    x-show="!isOpen()"
                    @click.prevent="handleOpen()"
                    class="p-3 hover:bg-indigo-500 hover:text-white"
                    href="#"
                >
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </a>
                <a
                    class="p-3 hover:bg-indigo-500 hover:text-white"
                    href="#"
                >
                    Project Sidebar
                </a>
            </div>
            <div class="flex ml-auto">
                <a
                    class="p-3 hover:bg-indigo-500 hover:text-white"
                    href="#"
                >
                    Account
                </a>
            </div>
        </nav>
        <main class="grid gap-4 p-4 md:grid-cols-2 lg:grid-cols-3">
            <div class="shadow-lg">
                <div class="px-4 py-3 text-white bg-indigo-500">
                    Lorem Ipsum
                </div>
                <p class="p-4 bg-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Nam euismod est at nunc rutrum, sit amet
                    eleifend magna lacinia. Nullam pharetra suscipit
                    ultricies. Nulla aliquet porttitor porta. Sed
                    finibus pretium diam, vitae volutpat arcu accumsan
                    a. Class aptent taciti sociosqu ad litora torquent
                    per conubia nostra, per inceptos himenaeos.
                    Suspendisse potenti. Suspendisse lacus ante, aliquet
                    in dignissim non, ultrices lobortis metus. Integer
                    auctor laoreet odio et molestie. Maecenas semper
                    egestas justo, nec tincidunt augue.
                </p>
            </div>
            <div class="shadow-lg">
                <div class="px-4 py-3 text-white bg-indigo-500">
                    Lorem Ipsum
                </div>
                <p class="p-4 bg-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Nam euismod est at nunc rutrum, sit amet
                    eleifend magna lacinia. Nullam pharetra suscipit
                    ultricies. Nulla aliquet porttitor porta. Sed
                    finibus pretium diam, vitae volutpat arcu accumsan
                    a. Class aptent taciti sociosqu ad litora torquent
                    per conubia nostra, per inceptos himenaeos.
                    Suspendisse potenti. Suspendisse lacus ante, aliquet
                    in dignissim non, ultrices lobortis metus. Integer
                    auctor laoreet odio et molestie. Maecenas semper
                    egestas justo, nec tincidunt augue.
                </p>
            </div>
        </main>
    </div>
</div>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img
                            class="object-cover relative rounded-full border border-gray-100 shadow-sm max-w-max h-9 w-auto"
                            src="{{ asset('images/wcf1.jpg') }}"/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:flex sm:items-center sm:ml-6">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    {{--}}
                    <x-jet-dropdown>
                        <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
                                        {{ __('Account') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Choose Groups') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('account') }}">
                                {{ __('Account') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>
                            <x-jet-dropdown-link href="{{ route('account.lookup') }}">
                                {{ __('Account Lookup') }}
                            </x-jet-dropdown-link>
                        </x-slot>
                    </x-jet-dropdown>
                    {{--}}
                    <x-jet-nav-link href="{{ route('work-orders') }}" :active="request()->routeIs('work-orders')">
                        {{ __('Work Orders') }}
                    </x-jet-nav-link>
                    {{--}}
                    <x-jet-nav-link href="{{ route('account.lookup') }}" :active="request()->routeIs('account.lookup')">
                        {{ __('Account Lookup') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('account.connections') }}"
                                    :active="request()->routeIs('account.connections')">
                        {{ __('Connections') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('account.terminations') }}"
                                    :active="request()->routeIs('account.terminations')">
                        {{ __('Terminations') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('apc.configured-services') }}"
                                    :active="request()->routeIs('apc.configured-services')">
                        {{ __('Configured Services') }}
                    </x-jet-nav-link>
                    <x-jet-dropdown>
                        <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
                                        {{ __('Terminations') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Choose Groups') }}
                            </div>

                            <x-jet-dropdown-link href="#">
                                {{ __('Hilltown') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>
                            <x-jet-dropdown-link href="#">
                                {{ __('Westfield') }}
                            </x-jet-dropdown-link>
                        </x-slot>
                    </x-jet-dropdown>
                    {{--}}
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team"/>
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

            <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                         src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('admin.configuration') }}">
                                {{ __('Configuration') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                <!-- Toggle Theme -->
                {{--}}<x-toggle-theme/>{{--}}
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Toggle Theme -->
                {{--}}<x-toggle-theme/>{{--}}
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
            {{--}}
            <x-jet-responsive-nav-link href="{{ route('account') }}"
                                       :active="request()->routeIs('account')">
                {{ __('Account') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('account.lookup') }}"
                                       :active="request()->routeIs('account.lookup')">
                {{ __('Account Lookup') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('account.connections') }}"
                                       :active="request()->routeIs('account.connections')">
                {{ __('Connections') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('apc.configured-services') }}"
                                       :active="request()->routeIs('apc.configured-services')">
                {{ __('Configured Services') }}
            </x-jet-responsive-nav-link>
            {{--}}
        </div>

        <!-- Responsive Navigation Dropdowns -->

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1">
                {{--}}
                <!-- Customer Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Customer Account Management') }}
                </div>
                <x-jet-responsive-nav-link href="{{ route('account') }}"
                                           :active="request()->routeIs('account')">
                    {{ __('Account') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('account.lookup') }}"
                                           :active="request()->routeIs('account.lookup')">
                    {{ __('Account Lookup') }}
                </x-jet-responsive-nav-link>

                <!-- Terminations -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Choose Termination Group') }}
                </div>
                <x-jet-responsive-nav-link href="{{ route('account') }}"> {{--}}:active="request()->routeIs('account')"{{--}}
                    {{ __('Hilltown') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="#"> {{--}}:active="request()->routeIs('account.lookup')" {{--}}
                    {{ __('Westfield') }}
                </x-jet-responsive-nav-link>
                {{--}}
            </div>
        </div>
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Account Management') }}
            </div>
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                             alt="{{ Auth::user()->name }}"/>
                    </div>
                @endif
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                                           :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('admin.configuration') }}"
                                           :active="request()->routeIs('admin.configuration')">
                    {{ __('Configuration') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                               :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

            <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                               :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                                                   :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link"/>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
