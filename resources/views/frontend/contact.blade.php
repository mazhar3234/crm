@extends('frontend.app')
@section('content')

<!-- contact form section -->
<section class="pt60 pb60 eleform">
    <div class="container">
             <div class="row">
            <div class="col-md-8 mx-auto text-center mb-5">
                <h2 class="title text-center">
Contact Us</h2>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <article class="TravelGo-category-listing fl-wrap">
                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                        <div class="TravelGo-category-content-title fl-wrap NeedHelp">
                            <div class="TravelGo-category-content-title-item">
                                <h3 class="title-sin_map">
                                    <a href="javascript:viod(0)">Need Help?</a>
                                </h3>
                                <div class="TravelGo-category-location fl-wrap"></div>
                            </div>
                        </div>
                        <div class="NeedhelpSection">
                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                            <ul>
                                <li>
                                    <span><i class="fas fa-phone-volume"></i></span>
                                    {{ $info->phone }}
                                </li>
                                <li>
                                    <span><i class="far fa-envelope"></i></span>
                                     {{ $info->email }}
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <!-- Email -->
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name">
                </div>
                <!-- Email -->
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email">
                </div>
                <!-- Email -->

                <!-- Textarea -->
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-grad float-right custom-btn" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact form section -->

<!-- map section -->
<section class="contact-page pt60 pb60">
    <div class="container">
        <div class="row">
            <!-- Google default iframe Map -->
            <div class="col-md-12">
                <div class="contact-map overflow-hidden">
    <iframe src="https://maps.google.com/maps?q=<?php echo $info->lat; ?>,<?php echo $info->lang; ?>&z=12&output=embed" frameborder="0" style="border:0; width:100%; height:450px;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end map section -->
{{-- @include('frontend.includes.newsletter') --}}

@endsection