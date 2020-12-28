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
                    Car Class
                </div>
                <div class="page-title-actions">
                    <a href="{{ URL::to('/create-vehicle-class') }}" class="btn btn-primary btn-wide btn-shadow btn-add"> New Car Class </a> 
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
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $sl = 0; ?>
                        	@foreach($vehicleClass as $class)
                        	<tr>
                        		<td>{{++$sl}}</td>
                        		<td>{{ $class->class_name }}</td>
                        		<td>{{ date('Y-m-d', strtotime($class->created_at)) }}</td>
                        		<td>
                        			<div class="dropdown d-inline-block">
                         				<button type="button" data-toggle="dropdown" class="dropdown-toggle btn-icon-only btn btn-light btn-sm">
                            				<i class="icon ion-android-apps"></i>
                         				</button>
                						<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu  custom-dropdown dropdown-menu-hover-link">
                							<a href="{{ URL::to('/edit-vehicle-class/'.$class->id) }}" class="dropdown-item"> Edit</a>

                							<a href="javascript:void(0)" class="dropdown-item delete" onclick="deleteResource(this,'delete-vehicle-class', <?php echo $class->id; ?>)"> Delete</a>
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