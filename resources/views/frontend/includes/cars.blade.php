<!-- popular car section -->
<section class="Categories pt60 pb60 TourHotels custom-section cars">
    <div class="container">
        <form class="form-inline" style="margin-bottom: 20px;">
            <div class="form-group col-md-8">
                <label for="language"><strong>Language: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="language">
                    <option><strong>Choose</strong></option>
                    <option><strong>English</strong></option>
                    <option><strong>Russain</strong></option>
                    <option><strong>Turkish</strong></option>
                    <option><strong>German</strong></option>
                </select>
                &nbsp;&nbsp;
                <label for="fuel_type"><strong>Fuel Type: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="fuel_type">
                    <option value="all">Choose</option>
                    <option value="gas">Liquid air</option>
                    <option value="gasAir">Gas</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                </select>
                &nbsp;&nbsp;
                <label for="car_type"><strong>Car Type: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="car_type">
                    <option value="all">Choose</option>
                    <option value="sedan">Sedan</option>
                    <option value="minivan">Miniven</option>
                    <option value="suv">SUV</option>
                    <option value="bus">Minibus</option>
                </select>
            </div>
            <div class="form-group col-md-4 sort_by_div">
                <label for="sort_by"><strong>Sort By: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="sort_by">
                    <option value="up">Price increase</option>
                    <option value="down">Price decrease</option>
                </select>
            </div>
        </form>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="TravelGo-category-img">
                                    <a href="hotel-detailed.html">
                                        <img src="{{ asset('/frontend/images/cars/1.jpg') }}" alt="">
                                    </a>
                                    <div class="TravelGo-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rate-class-name">
                                            <div class="score">
                                                <strong>English, Turkish</strong>27 Reviews
                                            </div>
                                            <span><img src="{{ asset('/frontend/images/users/user_2.jpg') }}" alt="" class="img-responsive driver"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                Mercedes-Benz - Maybach
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="javascript:void()" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; Sedan
                                                </a> 
                                                <span>200 GEL (~178 $)</span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <p class="car-title">
                                            Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.
                                        </p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><strong>Fuel: Petrol</strong></li>
                                            <li>| <strong>Seats: 3</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="TravelGo-category-img">
                                    <a href="hotel-detailed.html">
                                        <img src="{{ asset('/frontend/images/cars/2.jpg') }}" alt="">
                                    </a>
                                    <div class="TravelGo-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rate-class-name">
                                            <div class="score">
                                                <strong>English</strong>27 Reviews
                                            </div>
                                            <span><img src="{{ asset('/frontend/images/users/user_1.jpg') }}" alt="" class="img-responsive driver"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                Mercedes-Benz - Maybach
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="javascript:void()" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; Minivan
                                                </a> 
                                                <span>&euro; 200</span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <p class="car-title">
                                            Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.
                                        </p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><strong>Fuel: Petrol</strong></li>
                                            <li>| <strong>Seats: 3</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="TravelGo-category-img">
                                    <a href="hotel-detailed.html">
                                        <img src="{{ asset('/frontend/images/cars/3.jpg') }}" alt="">
                                    </a>
                                    <div class="TravelGo-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rate-class-name">
                                            <div class="score">
                                                <strong>English, Turkish</strong>27 Reviews
                                            </div>
                                            <span><img src="{{ asset('/frontend/images/users/user_2.jpg') }}" alt="" class="img-responsive driver"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                Mercedes-Benz - Maybach
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="javascript:void()" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; Sedan
                                                </a> 
                                                <span>200 RUB (~178 $)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <p class="car-title">
                                            Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.
                                        </p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><strong>Fuel: Petrol</strong></li>
                                            <li>| <strong>Seats: 3</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="TravelGo-category-img">
                                    <a href="hotel-detailed.html">
                                        <img src="{{ asset('/frontend/images/cars/4.jpg') }}" alt="">
                                    </a>
                                    <div class="TravelGo-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rate-class-name">
                                            <div class="score">
                                                <strong>English, Turkish</strong>27 Reviews
                                            </div>
                                            <span><img src="{{ asset('/frontend/images/users/user_2.jpg') }}" alt="" class="img-responsive driver"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                Mercedes-Benz - Maybach
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="#" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; Sedan
                                                </a> 
                                                <span>$ 200</span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <p class="car-title">
                                            Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.
                                        </p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><strong>Fuel: Petrol</strong></li>
                                            <li>| <strong>Seats: 3</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="TravelGo-category-img">
                                    <a href="hotel-detailed.html">
                                        <img src="{{ asset('/frontend/images/cars/5.jpg') }}" alt="">
                                    </a>
                                    <div class="TravelGo-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rate-class-name">
                                            <div class="score">
                                                <strong>English, Turkish</strong>27 Reviews
                                            </div>
                                            <span><img src="{{ asset('/frontend/images/users/user_1.jpg') }}" alt="" class="img-responsive driver"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                Mercedes-Benz - Maybach
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="#" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; Sedan
                                                </a> 
                                                <span>200 EUR (178 $)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <p class="car-title">
                                            Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.
                                        </p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><strong>Fuel: Petrol</strong></li>
                                            <li>| <strong>Seats: 3</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="TravelGo-category-img">
                                    <a href="hotel-detailed.html">
                                        <img src="{{ asset('/frontend/images/cars/6.jpg') }}" alt="">
                                    </a>
                                    <div class="TravelGo-category-opt">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rate-class-name">
                                            <div class="score">
                                                <strong>English, Turkish</strong>27 Reviews
                                            </div>
                                            <span><img src="{{ asset('/frontend/images/users/user_2.jpg') }}" alt="" class="img-responsive driver"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                Mercedes-Benz - Maybach
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="#" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; Sedan
                                                </a> 
                                                <span>200 GEL (178 $)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <p class="car-title">
                                            Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.
                                        </p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><strong>Fuel: Petrol</strong></li>
                                            <li>| <strong>Seats: 3</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end popular car section -->