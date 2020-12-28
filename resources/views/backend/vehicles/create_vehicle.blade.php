@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/vehicles') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Create Car
                </div>
            </div>
        </div>
    </div>
    <!-- subtitle -->
    {{ Form::open(['route'=>'save-vehicle.post', 'enctype'=>'multipart/form-data', 'id'=>'signupForm', 'novalidate']) }}
        <div class="app-page-title page-subtitle" id="page-subtitle">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-subheading pl-1">
                            Create Car with all required information.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="reset" class="btn btn-primary custom-btn-cancel mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary custom-btn-submit">Save</button>
                </div>    
            </div>
        </div>
        <!-- content area -->
        <div class="main-content custom-padding" style="padding-top: 10px;">
            <div class="main-card card custom-card">
                <div class="card-body">
                    <div class="row pb-4">
                        <div class="info-section col-md-4 col-sm-4 col-12">
                            <h2 class="info-title">Car Information</h2>
                            <p class="info-subtitle">
                                <figure>
                                    <img src="{{ asset('backend/images/vehicles/vehicle.png') }}" width="130" height="130" class="rounded-circle" id="img_prev">
                                    <input type="file" name="vehicle_image" class="form-control-file custom-form-contorl pt-1" accept="image/*" onchange="openFile(event)">
                                </figure>
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="vehicle_class_id" class="col-sm-3 col-form-label custom-label">
                                    Class Name
                                </label>
                                <div class="col-sm-9">
                                    <select name="vehicle_class_id" id="vehicle_class_id" class="form-control custom-form-contorl form-control-sm @if($errors->first('vehicle_class_id')) is-invalid @endif" required>
                                        <option value="">Choose Class</option>
                                        @foreach($vehicleClass as $class)
                                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->first('vehicle_class_id'))
                                        <em class="error invalid-feedback">{{ $errors->first('vehicle_class_id') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="vehicle_name" class="col-sm-3 col-form-label custom-label">
                                    Car Name
                                </label>
                                <div class="col-sm-9">
                                    <input name="vehicle_name" id="vehicle_name" placeholder="Vehicle name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('vehicle_name')) is-invalid @endif" value="{{ old('vehicle_name') }}" required minlength="3">
                                    @if($errors->first('vehicle_name'))
                                        <em class="error invalid-feedback">{{ $errors->first('vehicle_name') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="registration_no" class="col-sm-3 col-form-label custom-label">
                                    Registration No
                                </label>
                                <div class="col-sm-9">
                                    <input name="registration_no" id="registration_no" placeholder="Registration number" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('registration_no')) is-invalid @endif" value="{{ old('registration_no') }}">
                                    @if($errors->first('registration_no'))
                                        <em class="error invalid-feedback">{{ $errors->first('registration_no') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="fuel_type" class="col-sm-3 col-form-label custom-label">
                                    Fuel Type
                                </label>
                                <div class="col-sm-9">
                                    <select name="fuel_type" id="fuel_type" class="form-control custom-form-contorl form-control-sm @if($errors->first('fuel_type')) is-invalid @endif" required>
                                        <option value="">Choose Fuel</option>
                                        <option>Liquid air</option>
                                        <option>Gas</option>
                                        <option>Petrol</option>
                                        <option>Diesel</option>
                                    </select>
                                    @if($errors->first('fuel_type'))
                                        <em class="error invalid-feedback">{{ $errors->first('fuel_type') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="seats" class="col-sm-3 col-form-label custom-label">
                                    Seats
                                </label>
                                <div class="col-sm-9">
                                    <input name="seats" id="seats" placeholder="Seats" type="number" class="form-control custom-form-contorl form-control-sm @if($errors->first('seats')) is-invalid @endif" value="{{ old('seats') }}">
                                    @if($errors->first('seats'))
                                        <em class="error invalid-feedback">{{ $errors->first('seats') }}</em> 
                                    @endif
                                </div>
                            </div>
                        </div>
                        <span class="custom-horizontal-row"></span>
                    </div>
                    <div class="row pb-4">
                        <div class="info-section col-md-4 col-sm-4 col-12">
                            <h2 class="info-title">Driver Information</h2>
                            <p class="info-subtitle">
                                <figure>
                                    <img src="{{ asset('backend/images/drivers/driver.png') }}" width="130" height="130" class="rounded-circle" id="img_prev2">
                                    <input type="file" name="driver_image" class="form-control-file custom-form-contorl pt-1" accept="image/*" onchange="openFile2(event)">
                                </figure>
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="driver_name" class="col-sm-2 col-form-label custom-label">
                                    Full Name
                                </label>
                                <div class="col-sm-10">
                                    <input name="driver_name" id="driver_name" placeholder="Full name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('driver_name')) is-invalid @endif" value="{{ old('driver_name') }}" required minlength="3">
                                    @if($errors->first('driver_name'))
                                        <em class="error invalid-feedback">{{ $errors->first('driver_name') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="email" class="col-sm-2 col-form-label custom-label">
                                    Email
                                </label>
                                <div class="col-sm-10">
                                    <input name="email" id="email" placeholder="Email" type="email" class="form-control custom-form-contorl form-control-sm @if($errors->first('email')) is-invalid @endif" value="{{ old('email') }}" required minlength="3">
                                    @if($errors->first('email'))
                                        <em class="error invalid-feedback">{{ $errors->first('email') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="language" class="col-sm-2 col-form-label custom-label">
                                    Language
                                </label>
                                <div class="col-sm-10">
                                    <select multiple name="language[]" id="language" class="form-control custom-form-contorl form-control-sm multiselect-dropdown">
                                        <option>English</option>
                                        <option>Turkish</option>
                                        <option>Russian</option>
                                        <option>German</option>
                                    </select>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="description" class="col-sm-2 col-form-label custom-label">
                                    Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea rows="4" name="description" id="description" placeholder="Include description" class="form-control custom-form-contorl form-control-sm" required minlength="50"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="info-section col-md-4 col-sm-4 col-12">
                            <h2 class="info-title">Price Information</h2>
                            <p class="info-subtitle">
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="row">
                                <input type="hidden" name="from_km[]" value="0">
                                <input type="hidden" name="to_km[]" value="0">
                                <div class="position-relative form-group col-md-4">
                                    <label for="amount_usd" class="col-form-label custom-label">
                                        Default Amount (USD)
                                    </label>
                                    <input name="amount_usd[]" id="amount_usd" placeholder="USD" type="number" class="form-control custom-form-contorl form-control-sm" required>
                                </div>
                                <div class="position-relative form-group col-md-4">
                                    <label for="amount_gel" class="col-form-label custom-label">
                                        Default Amount (GEL)
                                    </label>
                                    <input name="amount_gel[]" id="amount_gel" placeholder="GEL" type="number" class="form-control custom-form-contorl form-control-sm" required>
                                </div>
                                <div class="position-relative form-group col-md-4">
                                    <label for="amount_rub" class="col-form-label custom-label">
                                        Default Amount (RUB)
                                    </label>
                                    <input name="amount_rub[]" id="amount_rub" placeholder="RUB" type="number" class="form-control custom-form-contorl form-control-sm" required>
                                </div>
                            </div>
                            <div class="row" id="cloneDiv">
                                <div class="position-relative form-group col-md-3">
                                    <label for="from_km" style="font-size: 12px;" class="col-form-label custom-label">
                                        From KM
                                    </label>
                                    <input name="from_km[]" id="from_km" placeholder="From Km" type="number" class="form-control custom-form-contorl form-control-sm">
                                </div>
                                <div class="position-relative form-group col-md-2">
                                    <label style="font-size: 12px;" for="to_km" class="col-form-label custom-label">
                                        To KM
                                    </label>
                                    <input name="to_km[]" id="to_km" placeholder="To Km" type="number" class="form-control custom-form-contorl form-control-sm">
                                </div>
                                <div class="position-relative form-group col-md-2">
                                    <label style="font-size: 12px;" for="amount_usd" class="col-form-label custom-label">
                                        Amount (USD)
                                    </label>
                                    <input name="amount_usd[]" id="amount_usd" placeholder="USD" type="number" class="form-control custom-form-contorl form-control-sm">
                                </div>
                                <div class="position-relative form-group col-md-2">
                                    <label style="font-size: 12px;" for="amount_gel" class="col-form-label custom-label">
                                        Amount (GEL)
                                    </label>
                                    <input name="amount_gel[]" id="amount_gel" placeholder="GEL" type="number" class="form-control custom-form-contorl form-control-sm">
                                </div>
                                <div class="position-relative form-group col-md-2">
                                    <label style="font-size: 12px;" for="amount_rub" class="col-form-label custom-label">
                                        Amount (RUB)
                                    </label>
                                    <input name="amount_rub[]" id="amount_rub" placeholder="RUB" type="number" class="form-control custom-form-contorl form-control-sm">
                                </div>
                                <div class="position-relative form-group col-md-1">
                                    
                                    <button class="btn btn-light" id="add_more" type="button"><i class="fa fa-plus"></i></button>
                                    <button class="btn btn-light rem" id="removeDiv" type="button"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="dd">

                            </div>
                        </div>
                        <span class="custom-horizontal-row"></span>
                    </div>



                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>
<!-- main content end here -->

@endsection