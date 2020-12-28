@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title app-page-shadow mb-2">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
              
                <div class="page-title-content">
                    Update Company Information
                </div>
            </div>
        </div>
    </div>
    {{ Form::open(['route'=>'update-company-info.post', 'id'=>'signupForm', 'novalidate']) }}
        <!-- content area -->
        <div class="main-content custom-padding" style="padding-top: 10px;">
            <div class="main-card card custom-card">
                <div class="card-body">
                    <div class="row pb-4">
                        
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   About Company In English
                                </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="about_en" required="">{{ $company->about_en
                                     }}</textarea>
                                    
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   About Company In Russia
                                </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="about_rs" required="">{{ $company->about_rs
                                     }}</textarea>
                                    
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Address
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="address" value="{{ $company->address }}" placeholder="" required="">      
                                </div>
                            </div>
                                <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Email
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email" name="email" value="{{ $company->email }}" placeholder="" required="">      
                                </div>
                            </div>
                                <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Phone Number
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="phone" value="{{ $company->phone }}" placeholder="" required="">      
                                </div>
                            </div>
                                <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                  Company Address Latitude
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="lat" value="{{ $company->lat }}" placeholder="" required="">      
                                </div>
                            </div>
                                <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Company Address Longitude 
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="lang" value="{{ $company->lang }}" placeholder="" required="">      
                                </div>
                            </div>
                               <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Facebook Link 
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="fb" value="{{ $company->fb }}" placeholder="">      
                                </div>
                            </div>
                               <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Twitter Link 
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="twt" value="{{ $company->twt }}" placeholder="">      
                                </div>
                            </div>
                               <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Linkedin Link 
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="link" value="{{ $company->link }}" placeholder="">      
                                </div>
                            </div>
                               <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label custom-label">
                                   Instagram Link 
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="ins" value="{{ $company->ins }}" placeholder="">      
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label custom-label">
                                </label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary custom-btn-submit float-right">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="info_id" value="{{ $company->info_id }}">
    {{ Form::close() }}
</div>
<!-- main content end here -->

@endsection