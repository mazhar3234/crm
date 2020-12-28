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
                    Locations
                </div>
                <div class="page-title-actions">
                    <a href="{{ URL::to('/create-location') }}" class="btn btn-primary btn-wide btn-shadow btn-add"> New Location </a> 
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
                                <th>Location Name</th>
                                <th>Location Russian</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $sl = 0; ?>
                        	@foreach($locations as $location)
                        	<tr>
                        		<td>{{++$sl}}</td>
                                <td>{{ $location->location_name }}</td>
                        		<td>{{ $location->location_name_rus }}</td>
                        		<td>{{ date('Y-m-d', strtotime($location->created_at)) }}</td>
                        		<td>
                        			<div class="dropdown d-inline-block">
                         				<button type="button" data-toggle="dropdown" class="dropdown-toggle btn-icon-only btn btn-light btn-sm">
                            				<i class="icon ion-android-apps"></i>
                         				</button>
                						<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu  custom-dropdown dropdown-menu-hover-link">
                							<a href="{{ URL::to('/edit-location/'.$location->id) }}" class="dropdown-item"> Edit</a>

                							<a href="javascript:void(0)" class="dropdown-item delete" onclick="deleteResource(this,'delete-location', <?php echo $location->id; ?>)"> Delete</a>
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