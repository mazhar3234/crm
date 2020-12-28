{{-- popular car section  --}}
<section class="Categories pt60 TourHotels custom-section cars bg-transparent mt-custom car-custom">
    <div class="container">
        <form class="form-inline" style="margin-bottom: 20px;">
            <div class="form-group col-md-8">
                <label for="language"><strong>Language: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="language" onchange="filterCars(this.value)">
                    <option value=""><strong>Choose</strong></option>
                    <option><strong>English</strong></option>
                    <option><strong>Russian</strong></option>
                    <option><strong>Turkish</strong></option>
                    <option><strong>German</strong></option>
                </select>
                &nbsp;&nbsp;
             {{--    <label for="fuel_type"><strong>Fuel Type: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="fuel_type" onchange="filterCars(this.value)">
                    <option value="">Choose</option>
                    <option value="Liquid">Liquid air</option>
                    <option value="Gas">Gas</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                </select> --}}
                &nbsp;&nbsp;
                <label for="car_type"><strong>Car Type: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="car_type" onchange="filterCars(this.value)">
                    <option value="">Choose</option>
                    @foreach($vehicleClass as $class)
                    <option value="{{$class->class_name}}">{{$class->class_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4 sort_by_div">
                <label for="sort_by"><strong>Sort By: &nbsp;</strong></label>
                <select class="form-control custom-select-field" id="sort_by" onchange="sortCars(this.value)">
                    <option value="up">Price increase</option>
                    <option value="down">Price decrease</option>
                </select>
            </div>
        </form>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row" id="vehilcesList">
                    <span id="prev-item"></span>
                    @foreach($vehicles as $vehicle)
                    <?php 
                        $price = Helper::getDistancePrice($vehicle->id, $distance);
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 cars-main {{ str_replace(',', ' ', $vehicle->driver->language) }} {{ $vehicle->fuel_type }} {{ $vehicle->vehicleClass->class_name }}" id="{{$price}}">
                        <div class="listing-item">
                            <article class="TravelGo-category-listing fl-wrap car-item">
                                <div class="rate-class-name">
                                    <div class="row mx-0 mb-2 mt-2 px-2">
                            @if($vehicle->driver->language)
                                            <img src="{{ asset('backend/images/drivers/'.$vehicle->driver->image) }}" alt="driver_image" class="img-responsive driver">
                                            @else
                                            <img src="{{ asset('backend/images/drivers/driver.png') }}" alt="driver_image" class="img-responsive driver">
                                            @endif
                            <div class="col-7 pr-0 d-flex flex-column">
                                <a href="javascript:viod(0)">
                                    <span class="driver-name">{{ $vehicle->driver->driver_name }}</span>
                                </a>
                                <span class="languages">Speaks: {{ $vehicle->driver->language }}</span>
                            </div>
                            <div class="col-3 pr-0 pl-1 car-type text-center">
                                 <i style="font-size: 24px;" class="fas fa-car-side"></i> <br>
                                <span>{{ $vehicle->vehicleClass->class_name }}</span>
                            </div>
                        </div>
                               {{--      <div class="score">
                                        <span>
                                            @if($vehicle->driver->language)
                                            <img src="{{ asset('backend/images/drivers/'.$vehicle->driver->image) }}" alt="driver_image" class="img-responsive driver">
                                            @else
                                            <img src="{{ asset('backend/images/drivers/driver.png') }}" alt="driver_image" class="img-responsive driver">
                                            @endif
                                        </span>
                                        <div class="row">
                                            <div class="col-md-8 text-left">
                                              <strong style="font-size: 14px;font-weight: bold;">{{ $vehicle->driver->driver_name }}</strong> <br> 
                                               <strong style="font-size: 12px; ">Speaks: {{ $vehicle->driver->language }}</strong>
                                            </div>
                                            <div class="col-md-4 pull-right">
                                              <a href="javascript:void()" class="map-item" style="font-size: 14px;font-weight: bold;">
                                                    <i class="fas fa-car-side"></i>{{ $vehicle->vehicleClass->class_name }}
                                                </a> 
                                            </div>
                                            <strong>{{ $vehicle->driver->driver_name }}</strong> <br>
                                             <strong style="text-align: right;">{{ $vehicle->driver->driver_name }}</strong> 
                                           
                                        </div>
                                    </div> --}}
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        @if($vehicle->driver->total_ratting)
                                            {{ $vehicle->driver->total_ratting }}
                                        @else
                                            0
                                        @endif

                                        Reviews
                                    </div>
                                </div>
                                <div class="TravelGo-category-img">
                                    <a href="javascript:viod(0)" data-toggle="modal" data-target="#exampleModalCenter" onclick="setVehicleInfo(<?php echo $vehicle->id; ?>)">
                                        @if($vehicle->image)
                                        <img src="{{ asset('backend/images/vehicles/'.$vehicle->image) }}" alt="car_image">
                                        @else
                                        <img src="{{ asset('backend/images/vehicles/vehicle.png') }}" alt="car_image">
                                        @endif
                                    </a>
                                </div>
                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                    <div class="TravelGo-category-content-title fl-wrap">
                                        <div class="TravelGo-category-content-title-item">
                                            <h3 class="title-sin_map">
                                                {{ $vehicle->vehicle_name }}
                                            </h3>
                                            <div class="TravelGo-category-location fl-wrap">
                                                <a href="javascript:void()" class="map-item">
                                                    <i class="fas fa-car-side"></i>&nbsp; {{ $vehicle->vehicleClass->class_name }}
                                                </a> 
                                                <span style="text-transform: uppercase;">
                                                    {{ $price }}
                                                    {{ Session::get('currency') }}
                                                 </span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="car-info">
                                        <ul class="facilities-list fl-wrap">
                                            {{-- <li><strong>Fuel: {{ $vehicle->fuel_type }}</strong></li> --}}
                                            <li> <strong>Seats: {{ $vehicle->seats }}</strong></li>
                                            <button type="button" class="btn btn-primary btn-sm custom-btn" data-toggle="modal" data-target="#exampleModalCenter" onclick="setVehicleInfo(<?php echo $vehicle->id; ?>)">BOOK NOW</button>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <input type="hidden" value="{{ $price }}" class="priceList">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end popular car section