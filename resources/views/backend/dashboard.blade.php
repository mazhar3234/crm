@extends('backend.app')
@section('content')

<!-- main content start here -->
<div class="app-main__inner">
    <!-- page title section -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading col-12 col-md-12 col-sm-12">
                <div class="pl-1 pr-2">
                    <!-- <a href="#" class="page-back">
                        <i class="fa fa-arrow-left"></i>
                    </a> -->
                </div>
                <div class="page-title-content">
                    Dashboard
                </div>
            </div>
        </div>
    </div>
    <!-- subtitle -->
    <div class="main-content">
        <div class="main-card card custom-card">
            <div class="card-body custom-shadow">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content">
                                    <div class="widget-title text-uppercase">Locations</div>
                                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                        <div class="widget-chart-flex align-items-center">
                                            <div>
                                                <span class="opacity-10 text-primary pr-2">
                                                    <i class="fa fa-angle-up"></i>
                                                </span>
                                                {{ $locations }}
                                                <!-- <small class="opacity-5 pl-1">%</small> -->
                                            </div>
                                            <!-- <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                <div class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                                    <small></small>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content">
                                    <div class="widget-title text-uppercase">Reservation</div>
                                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                        <div class="widget-chart-flex align-items-center">
                                            <div>
                                                <span class="opacity-10 text-success pr-2">
                                                    <i class="fa fa-angle-up"></i>
                                                </span>
                                                {{ $reservations }}
                                                <!-- <small class="opacity-5 pl-1">%</small> -->
                                            </div>
                                            <!-- <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                <div class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                                    <small></small>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-warning border-warning card">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content">
                                    <div class="widget-title text-uppercase">Vehicles</div>
                                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                        <div class="widget-chart-flex align-items-center">
                                            <div>
                                                <span class="opacity-10 text-warning pr-2">
                                                    <i class="fa fa-angle-up"></i>
                                                </span>
                                                {{ $vehicles }}
                                                <!-- <small class="opacity-5 pl-1">%</small> -->
                                            </div>
                                            <!-- <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                <div class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                                    <small></small>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                     <div class="col-md-6 col-lg-3">
                        <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-danger border-danger card">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content">
                                    <div class="widget-title text-uppercase">Drivers</div>
                                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                        <div class="widget-chart-flex align-items-center">
                                            <div>
                                                <span class="opacity-10 text-danger pr-2">
                                                    <i class="fa fa-angle-down"></i>
                                                </span>
                                                {{ $drivers }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content end here -->

@endsection