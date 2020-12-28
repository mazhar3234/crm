@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/drivers') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Update Driver
                </div>
            </div>
        </div>
    </div>
    <!-- subtitle -->
    {{ Form::open(['route'=>'update-driver.post', 'enctype'=>'multipart/form-data', 'id'=>'signupForm', 'novalidate']) }}
        <div class="app-page-title page-subtitle" id="page-subtitle">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-subheading pl-1">
                            Update driver with all required information.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="reset" class="btn btn-primary custom-btn-cancel mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary custom-btn-submit">Save Changes</button>
                </div>    
            </div>
        </div>
        <!-- content area -->
        <div class="main-content custom-padding" style="padding-top: 10px;">
            <div class="main-card card custom-card">
                <div class="card-body">
                    <div class="row pb-4">
                        <div class="info-section col-md-4 col-sm-4 col-12">
                            <h2 class="info-title">Profile Information</h2>
                            <p class="info-subtitle">
                                <figure>
                                    @if($driver->image)
                                    <img src="{{ asset('backend/images/drivers/'.$driver->image) }}" width="130" height="130" class="rounded-circle" id="img_prev">
                                    @else
                                    <img src="{{ asset('backend/images/drivers/driver.png') }}" width="130" height="130" class="rounded-circle" id="img_prev">
                                    @endif
                                    <input type="file" name="driver_image" class="form-control-file custom-form-contorl pt-1" accept="image/*" onchange="openFile(event)">
                                </figure>
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="driver_name" class="col-sm-2 col-form-label custom-label">
                                    Full Name
                                </label>
                                <div class="col-sm-10">
                                    <input name="driver_name" id="driver_name" placeholder="Full name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('driver_name')) is-invalid @endif" value="{{ $driver->driver_name }}" required minlength="3">
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
                                    <input name="email" id="email" placeholder="Email" type="email" class="form-control custom-form-contorl form-control-sm @if($errors->first('email')) is-invalid @endif" value="{{ $driver->email }}" required minlength="3">
                                    @if($errors->first('email'))
                                        <em class="error invalid-feedback">{{ $errors->first('email') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="mobile_no" class="col-sm-2 col-form-label custom-label">
                                    Mobile No
                                </label>
                                <div class="col-sm-10">
                                    <input name="mobile_no" id="mobile_no" placeholder="Mobile No" type="text" class="form-control custom-form-contorl form-control-sm" value="{{ $driver->mobile_no }}">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="language" class="col-sm-2 col-form-label custom-label">
                                    Language
                                </label>
                                <div class="col-sm-10">
                                    <select multiple name="language[]" id="language" class="form-control custom-form-contorl form-control-sm multiselect-dropdown">
                                        @foreach(explode(',', $driver->language) as $lang)
                                            <option selected>{{$lang}}</option>
                                        @endforeach
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
                                    <textarea rows="4" name="description" id="description" placeholder="include description" class="form-control custom-form-contorl form-control-sm" required minlength="50">{{ $driver->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="driver_id" value="{{ $driver->id }}">
    {{ Form::close() }}
</div>
<!-- main content end here -->

@endsection