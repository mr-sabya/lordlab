<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="{{ url('assets/backend/images/logo/logo.png') }}" style="max-height: 70px;" alt="logo">
        </div>
        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
    </div>
    <ul class="nav-menu">
        <li class="nav-menu-item {{ Route::is('admin.dashboard') ? 'router-link-active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" wire:navigate>
                <i class="feather icon-home"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">APPS</li>

        <li class="nav-submenu {{ Route::is('admin.portfolio.category.index') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Portfolio</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" @if(Route::is('admin.portfolio.category.index')) style="display: block;" @endif>

                <li class="nav-menu-item {{ Route::is('admin.portfolio.category.index') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.portfolio.category.index')}}" wire:navigate>Category</a>
                </li>


            </ul>
        </li>
        <li class="nav-submenu {{ Route::is('admin.media.image.index') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Media</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" @if(Route::is('admin.media.image.index')) style="display: block;" @endif>

                <li class="nav-menu-item {{ Route::is('admin.media.image.index') ? 'router-link-active' : '' }}">
                    <a href="{{ route('admin.media.image.index')}}" wire:navigate>Image</a>
                </li>


            </ul>
        </li>



        <li class="nav-group-title">USER INTERFACE</li>



        <li class="nav-submenu {{ Route::is('admin.home.*') ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="feather icon-package"></i>
                <span>Home Page</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">

                <li class="nav-menu-item ">
                    <a href="#" wire:navigate>Banner Section</a>
                </li>


            </ul>
        </li>


    </ul>
</div>