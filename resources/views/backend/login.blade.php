@include('backend.layouts.top')

<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="modal-dialog w-100 mx-auto custom-login-dialog">
                        {{ Form::open(['route'=>'authentication.post', 'novalidate'=>'novalidate', 'id'=>'signupForm']) }}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="h5 modal-title text-center">
                                    <img src="{{ asset('/backend/images/components/logo_original.png') }}">
                                </div>
                                <div class="h5 modal-title">
                                    <span>Please provide your details {{session('user_name')}}</span>
                                </div>
                                <div class="form-row" id="loginForm">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <input type="text" autocomplete="off" name="username" id="username" class="form-control custom-form-contorl @if($errors->first('email')) is-invalid @endif" placeholder="Username" required>
                                            @if($errors->first('email'))
                                                <em class="error invalid-feedback">{{ $errors->first('email') }}</em>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <input type="password" autocomplete="off" name="password" id="password" class="form-control custom-form-contorl @if($errors->first('password')) is-invalid @endif" placeholder="Password" required>
                                            @if($errors->first('password'))
                                                <em class="error invalid-feedback">{{ $errors->first('password') }}</em>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer clearfix">
                                <button class="btn btn-primary btn-block custom-login custom-btn-submit" type="submit">Sign In</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                    <!-- <div class="text-center text-white opacity-8 mt-3">Copyright © B2M Tech 2019</div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.bottom')