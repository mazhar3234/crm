@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/users') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Create User
                </div>
            </div>
        </div>
    </div>
    <!-- subtitle -->
    {{ Form::open(['route'=>'save-user.post', 'enctype'=>'multipart/form-data', 'id'=>'signupForm', 'novalidate']) }}
        <div class="app-page-title page-subtitle" id="page-subtitle">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-subheading pl-1">
                            Create new user with all required information.
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
                            <h2 class="info-title">Profile Information</h2>
                            <p class="info-subtitle">
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="full_name" class="col-sm-2 col-form-label custom-label">
                                    Full Name
                                </label>
                                <div class="col-sm-10">
                                    <input name="full_name" id="full_name" placeholder="Full name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('full_name')) is-invalid @endif" value="{{ old('full_name') }}" required minlength="3">
                                    @if($errors->first('full_name'))
                                        <em class="error invalid-feedback">{{ $errors->first('full_name') }}</em> 
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
                                <label for="designation" class="col-sm-2 col-form-label custom-label">
                                    Designation
                                </label>
                                <div class="col-sm-10">
                                    <input name="designation" id="designation" placeholder="Designation" type="text" class="form-control custom-form-contorl form-control-sm" value="{{ old('designation') }}">
                                </div>
                            </div>
                        </div>
                        <span class="custom-horizontal-row"></span>
                    </div>
                    <div class="row">
                        <div class="info-section col-md-4 col-sm-4 col-12">
                            <p class="info-subtitle">
                                <figure>
                                    <img src="{{ asset('backend/images/users/user.png') }}" width="130" height="130" class="rounded-circle" id="img_prev">
                                    <input type="file" name="user_image" class="form-control-file custom-form-contorl pt-1" accept="image/*" onchange="openFile(event)">
                                </figure>
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="username" class="col-sm-2 col-form-label custom-label">
                                    Username
                                </label>
                                <div class="col-sm-10">
                                    <input name="username" id="username" placeholder="Full name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('username')) is-invalid @endif" value="{{ old('username') }}" required>
                                    @if($errors->first('username'))
                                        <em class="error invalid-feedback">{{ $errors->first('username') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="password" class="col-sm-2 col-form-label custom-label">
                                    Password
                                </label>
                                <div class="col-sm-10">
                                    <input name="password" id="password" placeholder="Password" type="password" class="form-control custom-form-contorl form-control-sm @if($errors->first('password')) is-invalid @endif" required minlength="6">
                                    @if($errors->first('password'))
                                        <em class="error invalid-feedback">{{ $errors->first('password') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="confirm_password" class="col-sm-2 col-form-label custom-label">
                                    Confirmed
                                </label>
                                <div class="col-sm-10">
                                    <input name="password_confirmation" id="confirm_password" placeholder="Confirmed password" type="password" class="form-control custom-form-contorl form-control-sm" required minlength="6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>
<!-- main content end here -->

@endsection