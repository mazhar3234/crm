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
                    <form name="form1" id="bookingForm">
                    <div class="tab_container">
                        <input id="tab1" type="radio" name="tabs" checked>
                        <!-- <label for="tab1"><i class="fas fa-car-side"></i><span>Cars</span></label> -->
                       
                        <section id="content1" class="tab-content" id="booking-data">
                            <div class="row" id="mainDiv">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding8">
                                    <select class="from-control from-location select2" name="from_location[]" onchange="loadCars()" id="from_location">
                                        <option value="">Drop of... click to select airport or city</option>
                                        @foreach($locations as $location)
                                        <option>{{ $location->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding8">
                                    <select class="from-control to-location select2" name="to_location[]" onchange="loadCars()" id="to_location">
                                        <option value="">Drop of... click to select airport or city</option>
                                        @foreach($locations as $location)
                                        <option>{{ $location->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="copyDiv"></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding8">
                                    <div class="form-group">
                                        <button class="btn btn-light btn-lg" type="button" id="add_location">
                                           <i class="fas fa-plus"></i> Add place
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding8">
                                    <div class="form-group"><span class="far fa-calendar-alt"></span>
                                        <input class="form-control" type="text" id="datepicker" autocomplete="off" placeholder="When...">
                                    </div>
                                </div> 
                            </div>
                            <p id="tripInfo" style="color: #F49122; font-size: 15px; font-weight: bold;"></p>
                        </section>
                        <input type="hidden" name="duration" id="duration">
                    </div>
                    </form>
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
                <h2 class="title text-center">WE OFFER YOU</h2>
              {{--   <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-unstyled">
  <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Vehicles with a best preparatory drivers</h4></li>
   <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Drivers that focused on your desires and consuption</h4></li>
    <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Comfort and safety</h4></li>
     <li><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  contact with us within 24/7</h4></li>
</ul>
            </div>
            <div class="col-md-6">
                                <ul class="list-group list-unstyled">
  <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>   Unforgettable trip to Georgia</h4></li>
   <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Currency exchange, shopping, selfie, etc.(for your discretion)</h4></li>
    <li class="mb-3"><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i> Stops at all the sights along the way</h4></li>
     <li><h4 style="font-size: 22px;"><i class="fas fa-thumbs-up"></i>  Best price, best service</h4></li>
</ul>
            </div>
        </div>
   {{--      <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">01</span> <span class="d-block mb-4"><i class="fas fa-road display-2 text-grad"></i></span> <a class="h5" href="#">Rail Booking</a> </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">02</span> <span class="d-block mb-4"><i class="fas fa-utensils display-2 text-grad"></i></span> <a class="h5" href="#">Hotel Booking</a> </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">03</span> <span class="d-block mb-4"><i class="fas fa-ticket-alt display-2 text-grad"></i></span> <a class="h5" href="#">Ticket Booking</a> </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">04</span> <span class="d-block mb-4"><i class="fas fa-child display-2 text-grad"></i></span> <a class="h5" href="#">Amazing Tour</a> </div>
            </div>
        </div> --}}
        <h4 style="font-size: 22px;margin-bottom:10px;" class="mt-5">
            The website  is created for convenient, reliable and simple search for your personal car with local drivers.</h4>

<h4 style="font-size: 22px;margin-bottom:10px;">Our database will contain information about each offer, the exact cost of the transfer, the characteristics of the driver and the car, the profile of the driver and their knowledge of languages. </h4>

<h4 style="font-size: 22px;margin-bottom:10px;">To select a transfer / tour you will need to specify the place of receipt and disembarkation.</h4>

<h4 style="font-size: 22px;margin-bottom:10px;">Pricing corresponds to services compared to competitive. We offer you services for better service, well-trained drivers who will be focused on your interests and convenience. With our drivers, you have the opportunity to stop and enjoy with additional sights and beautiful views that you can follow along the route and take the photos.</h4>

<h4  style="font-size: 22px;margin-bottom:10px;">Traveling with a local driver gives you the opportunity to immediately feel the originality and originality of the culture of Georgia and calmly enjoy them...
        </h4>

        <h1 style="margin-top:50px;" class="text-center">
We wish you have a good and interesting time in Georgia </h1>
    </div>
</section>
<!-- end service section -->

<!-- popular cities section -->
{{-- <section class="Categories pt80 pb60">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <p class="subtitle text-secondary nopadding">MOST POPULAR CITIES</p>
                <h1 class="paddtop1 font-weight lspace-sm">Popular Destination</h1>
            </div>
            <div class="col-md-4 d-lg-flex align-items-center justify-content-end">
                <button class="btn btn-info btn-sm custom-btn" type="submit">See all Place <i class="fas fa-angle-double-right ml-2"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home.jpg') }}" alt=""> </div>
                        <div class="list-mig-lc-con">
                            <h5>United States</h5>
                            <p>81 Cities </p>
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
                                    <h5>United Kingdom</h5>
                                    <p>81 Cities </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home3.jpg') }}" alt=""> </div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>Australia</h5>
                                    <p>81 Cities </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"> <img src="{{ asset('/frontend/images/tour/home4.jpg') }}" alt=""> </div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>Germany</h5>
                                    <p>81 Cities </p>
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
                                    <h5>India</h5>
                                    <p>81 Cities </p>
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