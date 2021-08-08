<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Logo" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler">
            <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
        </a>
    </div>
    <ul class="border-t border-theme-2 py-5 hidden">
        @foreach ($side_menu as $menuKey => $menu)
        {{-- {{dd($menu)}} --}}
        @if (isset($menu['label']) && $menu['label'] == 'header')
        <div class="text-gray-500 my-3 mx-3">{{$menu['title']}}</div>
        @elseif ($menu == 'devider')
        <li class=" side-nav__devider my-6">
        </li>
        @else
        <li>
            <a href="{{ route($menu['route_name']) }}"
                class="{{ $first_level_active_index == $menuKey ? 'menu menu--active' : 'menu' }}">
                <div class="menu__icon">
                    <i data-feather="{{ $menu['icon'] }}"></i>
                </div>
                <div class="menu__title">
                    {{ $menu['title'] }}
                    @if (isset($menu['sub_menu']))
                    <i data-feather="chevron-down"
                        class="menu__sub-icon {{ $first_level_active_index == $menuKey ? 'transform rotate-180' : '' }}"></i>
                    @endif
                </div>
            </a>
        </li>
        @endif
        @endforeach
    </ul>
</div>
<!-- END: Mobile Menu -->