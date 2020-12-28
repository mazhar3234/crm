<!-- header start here -->
<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <!-- <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
            </div> -->
        <div class="app-header-right">
            <!-- user profile section -->
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    @if(Session::has('admin.image'))
                                        <img width="42" class="rounded-circle auth-image" src="{{ Helper::getImageUrl('users', Session::get('admin.image')) }}" alt="User Image">
                                    @else
                                        <img width="42" class="rounded-circle auth-image" src="{{ Helper::getImageUrl('users', 'user.png') }}" alt="User Image">
                                    @endif
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu login">
                                    <div class="">
                                        <div class="login-scroll">
                                            <!-- <h6 tabindex="-1" class="dropdown-header">My Account</h6> -->
                                            <a tabindex="0" class="dropdown-item">
                                                <i class="dropdown-icon pe-7s-user login"></i>
                                                Profile
                                            </a>
                                            <!-- <a tabindex="0" class="dropdown-item">
                                                <i class="dropdown-icon pe-7s-key login"></i>
                                                Change Password
                                            </a> -->
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item signout">
                                        </li>
                                        <li class="nav-item-btn text-center nav-item signout">
                                            <a href="{{ URL::to('/signout') }}" class="btn-wide btn btn-secondary btn-sm">
                                                <i class="pe-7s-back"></i>
                                                SIGN OUT
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                @if(Session::has('admin.full_name'))
                                    {{ Session::get('admin.full_name') }}
                                @else
                                    CRM User
                                @endif
                            </div>
                            <div class="widget-subheading">
                                @if(Session::has('admin.designation'))
                                    {{ Session::get('admin.designation') }}
                                @else
                                    Unknown User
                                @endif
                            </div>
                        </div>
                        <!-- <div class="widget-content-right ml-3">
                            <button type="button" class="btn-shadow p-1 btn btn-secondary btn-sm">
                                <i class="fa text-white fa-power-off pr-1 pl-1"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end here -->