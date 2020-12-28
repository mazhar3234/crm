@extends('backend.app')
@section('content')

<style type="text/css">
    .table th, .table td {
        border-top: 1px solid #e2e3e4;
    }
</style>
<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title app-page-shadow mb-2">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <a href="{{ URL::to('/reservations') }}" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title-content">
                    Details Researvation
                </div>
            </div>
        </div>
    </div>

    <!-- content area -->
    <div class="main-content custom-padding" style="padding-top: 10px;">
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <img src="{{ asset('/backend/images/components/logo.png') }}">
                    </h2>
                </div>
            </div>
            <!-- info row -->
            <div class="row invoice-info mt-3">
                <div class="col-4 col-sm-4 invoice-col">
                    <strong class="fsize-3 text-success"> Admin </strong>
                    <address>
                    <strong>JaadCar.</strong><br>
                    4/13 Kaderabad Housing<br>
                    MohammodPur, Dhaka<br>
                    Phone: (804) 123-5432<br>
                    Email: info@jaadcar.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-4 col-sm-4 invoice-col">
                    <strong class="fsize-3 text-success"> Client </strong>
                    <address>
                    <strong>{{ $reservation->client_name }}</strong><br>
                    <b>Date:</b> {{ $reservation->reservation_date }} {{ $reservation->reservation_time }} <br>
                    {{ $reservation->last_name }}<br>
                    Phone: {{ $reservation->mobile_no }}<br>
                    Email: {{ $reservation->email }}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-4 col-sm-4 invoice-col">
                    <br>
                    <br>
                    <b>Invoice No:</b> {{ $reservation->invoice_id }}
                    <br>
                    <b>Payment Due:</b> {{ $reservation->reservation_date }}
                    <br>
                    <b>Account:</b> {{ $reservation->id }}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Car Details</th>
                                <th>Location</th>
                                <th>Extra</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <b>Vehicle:</b>
                                    <span class="fsize-1"> {{ $reservation->vehicle->vehicle_name }} </span>
                                </td>
                                <td rowspan="4">
                                    <?php 
                                        $fromIds = explode(',', $reservation->from_location_id);
                                        $toIds = explode(',', $reservation->to_location_id);
                                        $i = 0;
                                    ?>
                                    @foreach($fromIds as $fromId)
                                        {!! Helper::getLocation($fromId, $toIds[$i]) !!}

                                        <?php $i++; ?>
                                    @endforeach
                                </td>
                                <td>
                                    <b>Distance:</b>
                                    <span class="fsize-1"> {{ $reservation->distance }} KM </span>
                                </td>
                                <td rowspan="4" class="text-center">
                                    <strong class="fsize-2"> {{ $reservation->amount }} {{ $reservation->currency }} </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Reg. No:</b>
                                    <span class="fsize-1"> {{ $reservation->vehicle->registration_no }} </span>
                                </td>
                                <td>
                                    <b>Duration:</b>
                                    <span class="fsize-1"> {{ $reservation->duration }} </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Fuel:</b>
                                    <span class="fsize-1"> {{ $reservation->vehicle->fuel_type }} </span>
                                </td>
                                <td>
                                    <b>Pickup:</b>
                                    <span class="fsize-1"> {{ $reservation->pickup_address }} </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Seats:</b>
                                    <span class="fsize-1"> {{ $reservation->vehicle->seats }} </span>
                                </td>
                                <td>
                                    <b>Dropoff:</b>
                                    <span class="fsize-1"> {{ $reservation->dropoff_address }} </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-8 col-md-8">
                </div>
                <!-- /.col -->
                <div class="col-8 col-md-4">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>{{ $reservation->amount }} {{ $reservation->currency }}</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>{{ $reservation->amount }} {{ $reservation->currency }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a type="button" target="_blank" class="btn btn-success pull-right" href="{{ URL::to('print-reservation/'.$reservation->id) }}">
                        <i class="fa fa-print"></i> Print
                    </a>
                    <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Generate PDF
                    </button> -->
                </div>
            </div>
        </section>
    </div>
</div>
<!-- main content end here -->

@endsection