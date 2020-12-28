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
                    Update User
                </div>
            </div>
        </div>
    </div>
    <!-- subtitle -->
    {{ Form::open(['route'=>'update-user.post', 'enctype'=>'multipart/form-data', 'id'=>'signupForm', 'novalidate']) }}
        <div class="app-page-title page-subtitle" id="page-subtitle">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-subheading pl-1">
                            Update user with all required information.
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
                            <figure>
                            	@if($user->image)
                                <img src="{{ asset('backend/images/users/'.$user->image) }}" width="130" height="130" class="rounded-circle" id="img_prev">
                                @else
                                <img src="{{ asset('backend/images/users/user.png') }}" width="130" height="130" class="rounded-circle" id="img_prev">
                                @endif
                                <input type="file" name="user_image" class="form-control-file custom-form-contorl pt-1" accept="image/*" onchange="openFile(event)">
                            </figure>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="full_name" class="col-sm-2 col-form-label custom-label">
                                    Full Name
                                </label>
                                <div class="col-sm-10">
                                    <input name="full_name" id="full_name" placeholder="Full name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('full_name')) is-invalid @endif" value="{{ $user->full_name }}" required minlength="3">
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
                                    <input name="email" id="email" placeholder="Email" type="email" class="form-control custom-form-contorl form-control-sm @if($errors->first('email')) is-invalid @endif" value="{{ $user->email }}" required minlength="3">
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
                                    <input name="designation" id="designation" placeholder="Designation" type="text" class="form-control custom-form-contorl form-control-sm" value="{{ $user->designation }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="user_id" value="{{ $user->id }}">
    {{ Form::close() }}
</div>
<!-- main content end here -->

@endsection