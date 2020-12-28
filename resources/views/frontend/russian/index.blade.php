@extends('frontend.app')
@section('content')

<!-- main banner -->
<section class="p-0 height-700 parallax-bg tourBanner" style="background:url(/frontend/images/slider/slider_2.jpg) no-repeat 65% 0%; background-size:cover;">
    <div class="container h-100">
        <div class="row justify-content-between align-items-center h-100">
            <!-- <div class="col-md-8 mb-7">
                <h4>World's biggest online car rental service</h4>
                <h1 class="display-4 font-weight-bold">
                    Upto 25% off on first booking through your app
                </h1>
            </div> -->
        </div>
    </div>
</section>
<!-- main banner -->

<!-- booking section -->
<section class="mt-lg-n9 mt-sm-0 pb-0 z-index-9 booking-search custom-margin" id="booking">
    <div class="container ">
        <div class="row shadow border-radius-3">
            <div class="col-md-12 np">
                <div class="feature-box h-100">
                    <div class="tab_container">
                        <input id="tab1" type="radio" name="tabs" checked>
                        <!-- <label for="tab1"><i class="fas fa-car-side"></i><span>Cars</span></label> -->
                       
                        <section id="content1" class="tab-content" id="booking-data">
                            <div class="row" id="mainDiv">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding8">
                                    <select class="from-control from-location select2" name="from_location[]" onchange="loadCars()" id="from_location">
                                        <option value="">От: Аэропорт Кутаиси</option>
                                        @foreach($locations as $location)
                                        <option value="{{ $location->location_name }}">{{ $location->location_name_rus }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding8">
                                    <select class="from-control to-location select2" name="to_location[]" onchange="loadCars()" id="to_location">
                                        <option value="">В: Международный аэропорт Батуми</option>
                                        @foreach($locations as $location)
                                        <option value="{{ $location->location_name }}">{{ $location->location_name_rus }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="copyDiv"></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding8">
                                    <div class="form-group">
                                        <button class="btn btn-light btn-lg" type="button" id="add_location">
                                           <i class="fas fa-plus"></i> Добавить место
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding8">
                                    <div class="form-group"><span class="far fa-calendar-alt"></span>
                                        <input class="form-control" type="text" id="datepicker" autocomplete="off" placeholder="когда...">
                                    </div>
                                </div> 
                            </div>
                            <p id="tripInfo" style="color: #F49122; font-size: 15px; font-weight: bold;"></p>
                        </section>
                        <input type="hidden" name="duration" id="duration">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end booking section -->

<div id="carOutput"></div>

<!-- service section -->
<section class="bg-light bg-transparent pt80 pb60 solutions mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center mb-5">
                <h2 class="title text-center">
                    МЫ ПРЕДЛАГАЕМ ВАМ
                </h2>
               {{--  <p>
                    Сайт www.hellotrip.ge создан для удобного, надежного и простого поиска вашего личного автомобиля с местными водителями.
                </p> --}}
            </div>
        </div>
             <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-unstyled">
  <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Автомобили с  подготовительными водителями</h4></li>
   <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Водители, которые сосредоточены на ваших желаниях и потреблении</h4></li>
    <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Комфорт и безопасность</h4></li>
     <li><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Связ в течение 24/7</h4></li>
</ul>
            </div>
            <div class="col-md-6">
                                <ul class="list-group list-unstyled">
  <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>   Незабываемое путешествие в Грузию</h4></li>
   <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i> Обмен валюты, покупки, селфи и т. д. (На ваше усмотрение)</h4></li>
    <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i> Остановка у всех достопримечательностей по пути</h4></li>
     <li><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i> Лучшую цену, лучший сервис</h4></li>
</ul>
            </div>
        </div>
         <h4 style="font-size: 22px;margin-bottom:10px;" class="mt-5">
           Сайт создан для удобного, надежного и простого поиска вашего личного автомобиля с местными водителями.</h4>

<h4 style="font-size: 22px;margin-bottom:10px;">Наша база данных будет содержать информацию о каждом предложении, точную стоимость трансфера, характеристики водителя и автомобиля, профиль водителя и их знание языков.</h4>

<h4 style="font-size: 22px;margin-bottom:10px;">Для выбора трансфера / тура вам необходимо будет указать место получения и высадки.</h4>

<h4 style="font-size: 22px;margin-bottom:10px;">Ценообразование соответствует услугам по сравнению с конкурентными. Мы предлагаем вам услуги для лучшего обслуживания, хорошо обученных водителей, которые будут сосредоточены на ваших интересах и удобстве.</h4>

<h4  style="font-size: 22px;margin-bottom:10px;">С нашими водителями у вас есть возможность остановиться и насладиться дополнительными достопримечательностями и прекрасными видами, которыми вы можете следовать по маршруту и делать фотографии.
        </h4>
        <h4  style="font-size: 22px;margin-bottom:10px;">Путешествие с местным водителем дает вам возможность сразу почувствовать оригинальность и самобытность культуры Грузии и спокойно насладиться ими.
        </h4>

        <h1 style="margin-top:50px;" class="text-center">
Желаем вам интересно провести время в Грузию</h1>
      {{--   <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">01</span> <span class="d-block mb-4"><i class="fas fa-road display-2 text-grad"></i></span> <a class="h5" href="#">Железнодорожное бронирование</a> </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">02</span> <span class="d-block mb-4"><i class="fas fa-utensils display-2 text-grad"></i></span> <a class="h5" href="#">Бронирование отеля</a> </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">03</span> <span class="d-block mb-4"><i class="fas fa-ticket-alt display-2 text-grad"></i></span> <a class="h5" href="#">Бронирование билетов</a> </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">04</span> <span class="d-block mb-4"><i class="fas fa-child display-2 text-grad"></i></span> <a class="h5" href="#">Удивительный тур</a> </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- end service section -->

<!-- popular cities section -->
{{-- <section class="Categories pt80 pb60">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <p class="subtitle text-secondary nopadding">САМЫЕ ПОПУЛЯРНЫЕ ГОРОДА</p>
                <h1 class="paddtop1 font-weight lspace-sm">Популярное направление</h1>
            </div>
            <div class="col-md-4 d-lg-flex align-items-center justify-content-end">
                <button class="btn btn-info btn-sm custom-btn" type="submit">Посмотреть все Место <i class="fas fa-angle-double-right ml-2"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home.jpg') }}" alt=""> </div>
                        <div class="list-mig-lc-con">
                            <h5>Соединенные Штаты</h5>
                            <p>81 Города </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home2.jpg') }}" alt=""> </div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>Соединенное Королевство</h5>
                                    <p>81 Города </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home3.jpg') }}" alt=""> </div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>Австралия</h5>
                                    <p>81 Города </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home4.jpg') }}" alt=""> </div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>Германия</h5>
                                    <p>81 Города </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img">
                                    <img src="{{ asset('/frontend/images/tour/home1.jpg') }}" alt="">
                                </div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>Бангладеш</h5>
                                    <p>81 Города </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- end popular cities section -->
    

{{-- @include('frontend.includes.newsletter') --}}

@endsection