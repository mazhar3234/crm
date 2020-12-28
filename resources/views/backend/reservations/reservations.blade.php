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
                    Reservations
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
                                <th>Vehicle Name</th>
                                <th>Client Name</th>
                                <th>Mobile No</th>
                                <th>Pickup Address</th>
                                <th>Distance</th>
                                <th>Amount</th>
                                <th>Date Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sl = 0; ?>
                            @foreach($reservations as $reservation)
                            <tr>
                                <td>{{++$sl}}</td>
                                <td>
                                    @if($reservation->vehicle->image)
                                    <img src="{{ asset('/backend/images/vehicles/'.$reservation->vehicle->image) }}" width="40" height="40" class="rounded mr-2">
                                    @else
                                    <img src="{{ asset('/backend/images/vehicles/vehicle.png') }}" width="40" height="40" class="rounded mr-2">
                                    @endif
                                    {{ $reservation->vehicle->vehicle_name }}
                                </td>
                                <td>{{ $reservation->client_name }}</td>
                                <td>{{ $reservation->mobile_no }}</td>
                                <td>{{ $reservation->pickup_address }}</td>
                                <td>{{ $reservation->distance }} KM</td>
                                <td>{{ $reservation->amount }} {{ $reservation->currency }}</td>
                                <td>{{ date('Y-m-d', strtotime($reservation->reservation_date)) }} {{ $reservation->reservation_time }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" data-toggle="dropdown" class="dropdown-toggle btn-icon-only btn btn-light btn-sm">
                                            <i class="icon ion-android-apps"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu  custom-dropdown dropdown-menu-hover-link">

                                            <a href="{{ URL::to('/details-reservation/'.$reservation->id) }}" class="dropdown-item"> Invoice</a>


                                            <a href="javascript:void(0)" class="dropdown-item delete" onclick="deleteResource(this,'delete-reservation', <?php echo $reservation->id; ?>)"> Delete</a>
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