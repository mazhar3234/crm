<?php 
$info=DB::table('contact_info')->where('info_id',1)->first();

?>
{{-- footer section  --}}
<footer class="footer footer-dark pt-6 position-relative custom-section footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <!-- footer widget 1 -->
                <div class="col-md-3 col-sm-6 order-sm-1">
                    <div class="widget address">
                        <a href="{{ URL::to('/') }}" class="footer-logo mb-3 d-block">
                            <img src="{{ asset('/frontend/images/logo/logo_2.png') }}">
                        </a>
                        <p>
                            @if(Session::get('language') == 'russian')
                                {{ $info->about_rs }}
                            @else
                               {{ $info->about_en }}
                            @endif
                        </p>
                    </div>
                </div>
                <!-- footer widget 2 -->
                <div class="col-md-3 col-sm-6 order-sm-3">
                    <div class="widget">
                        <h6>
                            @if(Session::get('language') == 'russian')
                                Быстрые ссылки
                            @else
                                Quick Links
                            @endif
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL::to('/tours') }}">Tour</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/contact-us') }}">Contact</a>
                            </li>
                            
                          
                        </ul>
                    </div>
                </div>

                <!-- footer widget 4 -->
                <div class="col-md-3 col-sm-4 order-sm-5">
                    <div class="widget">
                        <h6>
                            @if(Session::get('language') == 'russian')
                               
Социальные ссылки
                            @else
                               Social Links
                            @endif
                        </h6>
                         <ul class="social-icons">
                        <li class="social-icons-item social-facebook m-0">
                            <a class="social-icons-link w-auto px-2" target="_blank" href="{{ $info->fb }}"><i style="font-size: 24px;" class="fab fa-facebook-f"></i></a> 
                        </li>
                        <li class="social-icons-item social-instagram m-0">
                            <a class="social-icons-link w-auto px-2" target="_blank" href="{{ $info->twt }}"><i style="font-size: 24px;" class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icons-item social-instagram m-0">
                            <a class="social-icons-link w-auto px-2" target="_blank" href="{{ $info->link }}"><i style="font-size: 24px;" class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="social-icons-item social-twitter m-0">
                            <a class="social-icons-link w-auto pl-2" target="_blank" href="{{ $info->ins }}"><i style="font-size: 24px;" class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <!-- footer widget 5 -->
                <div class="col-md-3 col-sm-6 order-sm-2">
                    <div class="widget address">
                        <ul class="list-unstyled">
                            <li class="media mb-3"><i class="fas fa-map-marked-alt mr-3 display-8"></i>{{ $info->address }}</li>
                            <li class="media mb-3"><i class="mr-3 display-8 fas fa-headphones-alt"></i> {{ $info->phone }} </li>
                            <li class="media mb-3"><i class="mr-3 display-8 far fa-envelope"></i> {{ $info->email }}</li>
                           {{--  <li class="media mb-3"><i class="mr-3 display-8 far fa-clock"></i>
                                <p> Mon - Fri: <strong>09:00 - 21:00</strong>
                                </p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider mt-3"></div>
    <!--footer copyright -->
    <div class="footer-copyright">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
                <div class="copyright-text">
                    ©2020
                    @if(Session::get('language') == 'russian')
                        Все права защищены
                    @else
                        All Rights Reserved by
                    @endif
                    <a target="_blank" href="https://moazzamhossain7.github.io/">Moazzam</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer section