@include('backend.layouts.top')
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('backend.layouts.header')
        <!-- full content section -->
        <div class="app-main">
            @include('backend.layouts.left_nav')
            <div class="app-main__outer">
                @yield('content')
                
                
            </div>
        </div>
    </div>
    @include('backend.layouts.modal')
@include('backend.layouts.bottom')