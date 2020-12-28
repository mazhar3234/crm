@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/prices') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Update Price
                </div>
            </div>
        </div>
    </div>
    <!-- subtitle -->
    {{ Form::open(['route'=>'update-price.post', 'id'=>'signupForm', 'novalidate']) }}
        <div class="app-page-title page-subtitle" id="page-subtitle">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-subheading pl-1">
                            Update price with all required information.
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
                            <h2 class="info-title">Price Information</h2>
                            <p class="info-subtitle">
                            </p>
                        </div>
                        <div class="form-section col-md-8 col-sm-8 col-12">
                            <div class="row">
                                <div class="position-relative form-group col-md-8">
                                    <label for="vehicle_id" class="col-form-label custom-label">
                                        Vehicle Name
                                    </label>
                                    <select name="vehicle_id" id="vehicle_id" class="form-control custom-form-contorl form-control-sm @if($errors->first('vehicle_id')) is-invalid @endif" required>
                                        @foreach($vehicles as $vehicle)
                                        <option @if($vehicle->id==$price->id) selected @endif value="{{ $vehicle->id }}">
                                            {{ $vehicle->vehicle_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="from_km[]" value="0">
                                <input type="hidden" name="to_km[]" value="0">
                                <input type="hidden" name="price_id[]" value="{{$price->id}}">
                                <div class="position-relative form-group col-md-4">
                                    <label for="amount" class="col-form-label custom-label">
                                        Default Amount
                                    </label>
                                    <input name="amount[]" id="amount" placeholder="Default amount" type="text" class="form-control custom-form-contorl form-control-sm @if($errors->first('amount[]')) is-invalid @endif" value="{{$price->amount}}" required>
                                </div>
                            </div>
                            <?php $add = ''; $remove = 'none'; ?>
                            @foreach($prices as $data)
                            <div class="row" id="cloneDiv">
                                <div class="position-relative form-group col-md-4">
                                    <label for="from_km" class="col-form-label custom-label">
                                        From KM
                                    </label>
                                    <input name="from_km[]" placeholder="From Km" type="text" class="form-control custom-form-contorl form-control-sm" value="{{$data->from_km}}">
                                </div>
                                <div class="position-relative form-group col-md-4">
                                    <label for="to_km" class="col-form-label custom-label">
                                        To KM
                                    </label>
                                    <input name="to_km[]" placeholder="To Km" type="text" class="form-control custom-form-contorl form-control-sm" value="{{$data->to_km}}">
                                </div>
                                <div class="position-relative form-group col-md-3">
                                    <label for="amount" class="col-form-label custom-label">
                                        Amount
                                    </label>
                                    <input name="amount[]" placeholder="Amount" type="text" class="form-control custom-form-contorl form-control-sm" value="{{$data->amount}}">
                                </div>
                                <div class="position-relative form-group col-md-1">
                                    
                                    <button style="display: {{$add}};" class="btn btn-light" id="add_more" type="button"><i class="fa fa-plus"></i></button>
                                    <button style="display: {{$remove}};" class="btn btn-light rem"  type="button"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <input type="hidden" name="price_id[]" value="{{$data->id}}">
                            <?php $add = 'none'; $remove = 'inline'; ?>
                            @endforeach
                            <div class="dd">

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