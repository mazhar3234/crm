@extends('backend.app')
@section('content')

<style type="text/css">
    .p-2 {
        display: flex;
        float: left;
    }
</style>
<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title app-page-shadow mb-2">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/vehicles') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Car Details
                </div>
            </div>
        </div>
    </div>

    <!-- content area -->
    <div class="main-content custom-padding" style="padding-top: 10px;">
        <div class="row">
		    <div class="col-md-12">
		        <div class="main-card mb-3 card">
		            <div class="card-header">
		            	<span style="font-weight: 500; color: red;">{{ $vehicle->vehicle_name }} &nbsp;</span>  
		            	details
		            </div>
		            <div class="table-responsive">
		                <table class="align-middle mb-0 table table-borderless table-striped">
		                    <tbody>
		                        <tr>
		                            <td class="text-center text-muted" width="20%">
		                            	<img src="{{ asset('/backend/images/vehicles/'.$vehicle->image) }}" width="200" height="150" class="rounded m-2">
		                            </td>
		                            <td class="text-center" width="30%">
                                        <strong class="font-size-lg">
                                        	Class : {{ $vehicle->vehicleClass->class_name}}
                                        </strong>
                                        <div class="widget-subheading pt-3 font-size-lg"><i>
                                        	{{ $vehicle->vehicle_name }}
                                        </i></div>
		                            </td>
		                            <td class="text-center" width="20%">
                                        <div class="widget-subheading">
                                        	<i>Fuel Type: <div class="badge badge-success"> {{ $vehicle->fuel_type}} </div></i>
                                    	</div>
                                    	<div class="widget-subheading pt-2">
                                        	<i>Seats : <div class="badge badge-primary"> {{ $vehicle->seats}} </div></i>
                                    	</div>
                                    	<div class="widget-subheading pt-2">
                                        	<i>Reg. No: <div class="badge badge-warning"> {{ $vehicle->registration_no}} </div></i>
                                    	</div>
		                            </td>
		                            <td class="text-center font-size-lg" width="30%">
                                        Driver: <strong>{{ $vehicle->driver->driver_name}}</strong>
                                        <div class="widget-subheading pt-3 font-size-md" style="color:#111e5f;"><i>
                                        	{{ $vehicle->driver->language }}
                                        </i></div>
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		</div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        <span style="font-weight: 500; color: red;">{{ $vehicle->vehicle_name }} &nbsp;</span>  
                        Price Info
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped">
                            @foreach(Helper::getVehiclePrice($vehicle->id) as $slot)
                                <div class="p-2">
                                    <button class="btn-icon-vertical btn-hover-shine pt-2 pb-2 btn btn-outline-secondary active">
                                        From: {{$slot->from_km}} To {{$slot->to_km}} KM <br>
                                        <div class="widget-numbers text-success fsize-1"><span>USD: {{$slot->amount_usd}}</span></div>
                                        <div class="widget-numbers text-success fsize-1"><span>GEL: {{$slot->amount_gel}}</span></div>
                                        <div class="widget-numbers text-success fsize-1"><span>RUB: {{$slot->amount_rub}}</span></div>
                                    </button>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        <span style="font-weight: 500; color: red;">{{ $vehicle->driver->driver_name }} &nbsp;</span>  
                        details
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped">
                            <tbody>
                                <tr>
                                    <td class="text-center text-muted" width="20%">
                                        <img src="{{ asset('/backend/images/drivers/'.$vehicle->driver->image) }}" width="200" height="150" class="rounded m-2">
                                    </td>
                                    <td class="text-center" width="30%">
                                        <strong class="font-size-lg">
                                            Name : {{ $vehicle->driver->driver_name }}
                                        </strong>
                                        <div class="widget-subheading pt-3 font-size-lg">
                                            Email : <i>{{ $vehicle->driver->email }}</i>
                                        </div>
                                        <div class="widget-subheading pt-3 font-size-lg">
                                            Language : <i>{{ $vehicle->driver->language }}</i>
                                        </div>
                                    </td>
                                    <td class="text-center" width="20%">
                                        <strong class="font-size-lg">
                                            About:<br>
                                        </strong>
                                        {{ $vehicle->driver->description }}
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content end here -->

@endsection