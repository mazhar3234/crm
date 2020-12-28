@extends('backend.app') 
@section('content')
<style type="text/css">
    .widget-content-wrapper.price {
        color: #464545;
    }
    .accordion-wrapper>.card .collapse.show {
        border: none;
    }
    .accordian-card-body {
        padding: 10px 11px;
        margin-top: 5px;
    }
    .p-2 {
        display: flex;
        float: left;
    }
    .actions {
        display: flex;
    }
</style>
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
                    Prices
                </div>
                <div class="page-title-actions">
                    <a href="{{ URL::to('/create-price') }}" class="btn btn-primary btn-wide btn-shadow btn-add"> New Price </a> 
                </div>
            </div>
        </div>
    </div>
    <!-- main content of table -->
    <div class="main-content">
        <div class="main-card card custom-card">
            <div class="card-body custom-shadow">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>Price Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sl = 0; ?>
                            @foreach($prices as $price)
                            <tr>
                                <td>
                                    <div id="accordion{{$sl}}" class="accordion-wrapper mb-1">
                                        <div class="card">
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper price">
                                                    <div class="widget-content-left mr-3">
                                                        @if($price->vehicle->image)
                                                        <img src="{{ asset('/backend/images/vehicles/'.$price->vehicle->image) }}" width="50" height="50" class="rounded mr-2">
                                                        @else
                                                        <img src="{{ asset('/backend/images/vehicles/vehicle.png') }}" width="50" height="50" class="rounded mr-2">
                                                        @endif
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">{{ $price->vehicle->vehicle_name }}</div>
                                                        <div class="widget-subheading mt-1 opacity-10">
                                                            <div class="badge badge-pill badge-primary">
                                                                default
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="fsize-2 text-success">
                                                            <strong>$ {{ $price->amount }} Km</strong>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="text-success actions">
                                                            <a class="border-0 btn-transition btn btn-outline-info" href="{{ URL::to('/edit-price/'.$price->vehicle_id) }}" class="dropdown-item"> <i class="fa fa-edit"></i></a>

                                                            <a href="javascript:void(0)" class="border-0 btn-transition btn btn-outline-danger" onclick="deleteResource(this,'delete-price', <?php echo $price->vehicle_id; ?>)"> <i class="fa fa-trash-alt"></i></a>

                                                            <small class="fsize-2 text-success pl-2">
                                                                <a href="#" data-toggle="collapse" data-target="#collapseOne{{$sl}}">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-parent="#accordion{{$sl}}" id="collapseOne{{$sl}}" class="collapse">
                                                @foreach(Helper::getVehiclePrice($price->vehicle_id) as $slot)
                                                <div class="p-2">
                                                    <button class="btn-icon-vertical btn-hover-shine pt-2 pb-2 btn btn-outline-secondary active">
                                                        From: {{$slot->from_km}} To {{$slot->to_km}} KM <br>
                                                        <div class="widget-numbers text-success fsize-1"><span>Price: {{$slot->amount}}$</span></div>
                                                    </button>
                                                </div>
                                                @endforeach
                                            </div>
                                        </li>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php ++$sl; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection