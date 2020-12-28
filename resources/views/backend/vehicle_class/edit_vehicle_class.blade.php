@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title app-page-shadow mb-2">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/vehicle-class') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Update Car Class
                </div>
            </div>
        </div>
    </div>
    {{ Form::open(['route'=>'update-vehicle-class.post', 'id'=>'signupForm', 'novalidate']) }}
        <!-- content area -->
        <div class="main-content custom-padding" style="padding-top: 10px;">
            <div class="main-card card custom-card">
                <div class="card-body">
                    <div class="row pb-4">
                        <div class="info-section col-md-4 col-sm-4 col-12">
                            <h2 class="info-title">Class Information</h2>
                            <p class="info-subtitle">
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label for="class_name" class="col-sm-2 col-form-label custom-label">
                                    Class Name
                                </label>
                                <div class="col-sm-10">
                                    <input name="class_name" id="class_name" placeholder="Class name" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('class_name')) is-invalid @endif" value="{{ $class->class_name }}" required minlength="2">
                                    @if($errors->first('class_name'))
                                        <em class="error invalid-feedback">{{ $errors->first('class_name') }}</em> 
                                    @endif
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label custom-label">
                                </label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary custom-btn-submit float-right">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="class_id" value="{{ $class->id }}">
    {{ Form::close() }}
</div>
<!-- main content end here -->

@endsection