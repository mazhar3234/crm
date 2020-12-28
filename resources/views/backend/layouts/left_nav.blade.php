<!-- left navbar start here -->
<div class="app-sidebar sidebar-shadow">
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
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu custom-left" id="main-menu">
                <li class="mm-active" id="dashboard">
                    <a href="{{ URL::to('/dashboard') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-home custom-home-icon"></i>
                        <span class="menu-text"> Home </span>
                    </a>
                </li>
                <!-- <li id="users">
                    <a href="{{ URL::to('/users') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-users custom-sales-icon"></i>
                        <span class="menu-text"> Users </span>
                    </a>
                </li> -->
                <li id="reservations">
                    <a href="{{ URL::to('/reservations') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-news-paper custom-report-icon"></i>
                        <span class="menu-text"> Reservations </span>
                    </a>
                </li>
                <li id="vehicles">
                    <a href="#" class="nav-link">
                        <i class="metismenu-icon pe-7s-car"></i>
                        <span class="menu-text"> Cars </span>
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="sidebar-sub-menu">
                        <li>
                            <a href="{{ URL::to('/vehicles') }}" class="submenu-link" id="vehicles-nav">
                                All Cars
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/create-vehicle') }}" class="submenu-link" id="vehicles-class-nav">
                                Add New Car
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::to('/vehicle-class') }}" class="submenu-link" id="vehicle-class-nav">
                                Car Class
                            </a>
                        </li>
                    </ul>
                </li>
                  <li id="locations">
                    <a href="{{ URL::to('/company-info') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-news-paper custom-report-icon"></i>
                        <span class="menu-text"> Company Information </span>
                    </a>
                </li>
                <li id="locations">
                    <a href="{{ URL::to('/locations') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-map-marker custom-report-icon"></i>
                        <span class="menu-text"> Location </span>
                    </a>
                </li>
                <!-- <li id="prices">
                    <a href="{{ URL::to('/prices') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-cash custom-report-icon"></i>
                        <span class="menu-text"> Price </span>
                    </a>
                </li>
                <li id="drivers">
                    <a href="{{ URL::to('/drivers') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-user custom-report-icon"></i>
                        <span class="menu-text"> Drivers </span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- left navbar end here -->