<!-- BEGIN: Top Bar -->
<div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
    <div class="h-full flex items-center justify-between">
        <!-- BEGIN: Logo -->
        <a href="" class="-intro-x hidden md:flex">
            <img alt="Logo" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
            <span class="text-white text-lg ml-3">
                My<span class="font-medium">ISM</span>
            </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto text-white">
            <a href="">Application</a>
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="" class="breadcrumb--active">Dashboard</a>
        </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            <div class="search hidden sm:block">
                <input type="text"
                    class="search__input form-control dark:bg-dark-1 border-transparent placeholder-theme-8"
                    placeholder="Search...">
                <i data-feather="search" class="search__icon dark:text-gray-300"></i>
            </div>
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false">
                <img alt="Icewall Tailwind HTML Admin Template"
                    {{-- src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}"> --}}
                src="https://ui-avatars.com/api/?name={{$fakers[0]['users'][0]['name']}}">
            </div>
            <div class="dropdown-menu w-56">
                <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                        <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="p-2">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile
                        </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account
                        </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password
                        </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help
                        </a>
                    </div>
                    <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->