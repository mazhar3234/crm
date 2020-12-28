@extends('backend.app') 
@section('content')

<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title app-page-shadow mb-2">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <!-- <div class="pl-1 pr-2">
                    <a href="#" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div> -->
                <div class="page-title-content">
                    Vehicles
                </div>
                <div class="page-title-actions">
                    <a href="{{ URL::to('/create-vehicle') }}" class="btn btn-primary btn-wide btn-shadow btn-add"> New Vehicle </a> 
                </div>
            </div>
        </div>
    </div>
    <!-- main content of table -->
    <div class="main-content">
        <div class="main-card card custom-card">
            <div class="card-body custom-shadow">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Class Name</th>
                                <th>Vehicle</th>
                                <th>Driver</th>
                                <th>Reg. No</th>
                                <th>Fuel</th>
                                <th>Seat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sl = 0; ?>
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{++$sl}}</td>
                                <td>{{ $vehicle->vehicleClass->class_name }}</td>
                                <td>
                                    @if($vehicle->image)
                                    <img src="{{ asset('/backend/images/vehicles/'.$vehicle->image) }}" width="30" height="30" class="rounded-circle mr-2">
                                    @else
                                    <img src="{{ asset('/backend/images/vehicles/vehicle.png') }}" width="30" height="30" class="rounded-circle mr-2">
                                    @endif
                                    {{ $vehicle->vehicle_name }}
                                </td>
                                <td>{{ $vehicle->driver->driver_name }}</td>
                                <td>{{ $vehicle->registration_no }}</td>
                                <td>{{ $vehicle->fuel_type }}</td>
                                <td>{{ $vehicle->seats }}</td>
                                <td>
                                    @if($vehicle->status == '1')
                                        <label class="btn btn-success btn-sm">Active</label>
                                    @else
                                        <label class="btn btn-warning btn-sm">Inactive</label>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" data-toggle="dropdown" class="dropdown-toggle btn-icon-only btn btn-light btn-sm">
                                            <i class="icon ion-android-apps"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu  custom-dropdown dropdown-menu-hover-link">
                                            <a href="{{ URL::to('/edit-vehicle/'.$vehicle->id) }}" class="dropdown-item"> Edit</a>

                                            <a href="javascript:void(0)" class="dropdown-item delete" onclick="deleteResource(this,'delete-vehicle', <?php echo $vehicle->id; ?>)"> Delete</a>
                                            
                                            <a href="{{ URL::to('/details-vehicle/'.$vehicle->id) }}" class="dropdown-item"> Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection