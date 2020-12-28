<style type="text/css">
    table {
        margin-top: 10px;   
    }
    table td, table th {
        border: 1px solid #ddd;
        padding: 8px 8px;
    }
</style>
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
                <!-- /.col -->
                <div class="col-6 col-sm-6 invoice-col">
                    <strong class="fsize-3 text-success"> Client </strong>
                    <address>
                    <strong>{{ $reservation->first_name }}</strong><br>
                    <b>Date:</b> {{ $reservation->date }} {{ $reservation->time }} <br>
                    {{ $reservation->last_name }}<br>
                    Phone: {{ $reservation->mobile_no }}<br>
                    Email: {{ $reservation->email }}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-6 col-sm-6 invoice-col">
                    <br>
                    <br>
                    <b>Invoice No:</b> {{ $reservation->invoice_id }}
                    <br>
                    <b>Payment Due:</b> {{ $reservation->date }}
                    <br>
                    <b>Account:</b> {{ $reservation->account }}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table" cellpadding="0" cellspacing="0">
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
                                    <span class="fsize-1"> {{ $reservation->dropof_address }} </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
        </section>
    </div>
