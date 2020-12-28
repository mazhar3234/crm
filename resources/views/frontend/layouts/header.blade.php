{{-- header  --}}
<header class="header-static navbar-sticky navbar-light shadow custom-header">
    <!-- navbar top start -->
{{--     <div class="navbar-top d-none d-lg-block custom-navbar-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
     
                <div class="d-flex align-items-center">
                  
                    <ul class="nav list-unstyled">
                        <li class="nav-item mr-3">
                            <a class="navbar-link" href="#">
                                <strong><i class="fas fa-phone"></i></strong>&nbsp; (024) 123-1457
                            </a> 
                        </li>
                        <li class="nav-item mr-3">
                            <a class="navbar-link" href="#">
                                <strong><i class="far fa-envelope-open"></i></strong>&nbsp; help@jaadcar.com
                            </a>
                        </li>
                    </ul>
                </div>
 
                <div class="d-flex align-items-center">
                   
                   <div class="dropdown custom-dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize;"><img class="dropdown-item-icon" src="{{ asset('/frontend/images/component/us.svg') }}" alt="">{{ Session::get('language') }}</a>
                        <div class="dropdown-menu mt-2 shadow language" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item" href="{{ URL::to('/language/english') }}">
                                <img class="dropdown-item-icon" src="{{ asset('/frontend/images/component/us.svg') }}" alt=""> English 
                            </a>
                            <a class="dropdown-item" href="{{ URL::to('/language/russian') }}">
                                <img class="dropdown-item-icon" src="{{ asset('/frontend/images/component/ru.svg') }}" alt=""> Russian
                            </a>
                        </div>
                    </div> 
                    <ul class="social-icons">
                        <li class="social-icons-item social-facebook m-0">
                            <a class="social-icons-link w-auto px-2" target="_blank" href="{{ URL::to('https://facebook.com') }}"><i class="fab fa-facebook-f"></i></a> 
                        </li>
                        <li class="social-icons-item social-instagram m-0">
                            <a class="social-icons-link w-auto px-2" target="_blank" href="{{ URL::to('https://twitter.com') }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icons-item social-instagram m-0">
                            <a class="social-icons-link w-auto px-2" target="_blank" href="{{ URL::to('https://linkedin.in') }}"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="social-icons-item social-twitter m-0">
                            <a class="social-icons-link w-auto pl-2" target="_blank" href="{{ URL::to('https://instagram.com') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- navbar top end-->

    <!-- logo nav start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="{{ URL::to('/') }}"> <img src="{{ asset('/frontend/images/logo/logo_2.png') }}" alt="travelgo"></a>
            <!-- menu collapse button -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- main menu start -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <!-- menu item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ URL::to('/') }}" aria-expanded="false">
                            @if(Session::get('language') == 'russian')
                                Дом
                            @else
                                Home
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking" aria-expanded="false" id="transferMenu">
                            @if(Session::get('language') == 'russian')
                                СПЛАНИРУЙ ТУР
                            @else
                                Trip Planer
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('tours') }}" aria-expanded="false">
                            @if(Session::get('language') == 'russian')
                                ТУРЫ
                            @else
                                Tour
                            @endif
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('contact-us') }}" aria-expanded="false">
                            @if(Session::get('language') == 'russian')
                                КОНТАКТ
                            @else
                                Contact
                            @endif
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="docMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;">{{ Session::get('currency') }}</a>
                        <ul class="dropdown-menu language" aria-labelledby="docMenu">
                            @if(Session::get('currency') != 'gel')
                            <li>
                                <a class="dropdown-item" href="{{ URL::to('/currency/gel') }}">GEL</a>
                            </li>
                            @endif
                            @if(Session::get('currency') != 'usd')
                            <li>
                                <a class="dropdown-item" href="{{ URL::to('/currency/usd') }}">USD</a>
                            </li>
                            @endif
                            @if(Session::get('currency') != 'rub')
                            <li>
                                <a class="dropdown-item" href="{{ URL::to('/currency/rub') }}">RUB</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="docMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;"><img class="dropdown-item-icon" src="{{ asset('/frontend/images/component/us.svg') }}" alt="">{{ Session::get('language') }}</a>
                        <ul class="dropdown-menu language" aria-labelledby="docMenu2">
                            <li>
                                <a class="dropdown-item" href="{{ URL::to('/language/english') }}">
                                <img class="dropdown-item-icon" src="{{ asset('/frontend/images/component/us.svg') }}" alt=""> English 
                            </a>
                            </li>
                            <li>
                               <a class="dropdown-item" href="{{ URL::to('/language/russian') }}">
                                <img class="dropdown-item-icon" src="{{ asset('/frontend/images/component/ru.svg') }}" alt=""> Russian
                            </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- logo nav end -->
</header>
<!-- header end