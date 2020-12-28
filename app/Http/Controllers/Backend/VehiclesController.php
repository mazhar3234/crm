<?php
/**
 * Controller : Vehicles
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 29 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleClass;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Price;
use Session;
use Helper;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('backend.vehicles.vehicles', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$drivers = Driver::all();
    	$vehicleClass = VehicleClass::all();

        return view('backend.vehicles.create_vehicle', compact('drivers', 'vehicleClass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // driver add
            $driver = new Driver;
            $driver->driver_name = $request->driver_name;
            $driver->email = $request->email;
            $driver->language = implode(',', $request->language);
            $driver->description = $request->description;
            $driver->created_at = date('Y-m-d H:i:s');
            $driver->created_by = Session::get('admin.id');
            
            if($driver->save()) {
                #--- Image upload by Helper function ---#
                if($request->driver_image) {
                    $imageName = Helper::imageUpload('drivers', $driver->id, $request->driver_image);
                    #--- update image field in database ---#
                    $this->updateDriverImageField($driver->id, $imageName); 
                }
            }

            $vehicle = new Vehicle;
            $vehicle->vehicle_name = $request->vehicle_name;
            $vehicle->vehicle_class_id = $request->vehicle_class_id;
            $vehicle->driver_id = $driver->id;
            $vehicle->registration_no = $request->registration_no;
            $vehicle->fuel_type = $request->fuel_type;
            $vehicle->seats = $request->seats;
            $vehicle->created_at = date('Y-m-d H:i:s');
            $vehicle->created_by = Session::get('admin.id');

            if($vehicle->save()) {
                #--- Image upload by Helper function ---#
                if($request->vehicle_image) {
                    $imageName = Helper::imageUpload('vehicles', $vehicle->id, $request->vehicle_image);
                    #--- update image field in database ---#
                    $this->updateImageField($vehicle->id, $imageName); 
                }
            }
            // price add
            $i = 0;
            foreach ($request->amount_usd as $amount) {
                $price = new Price;
                $price->vehicle_id = $vehicle->id;
                $price->from_km = $request->from_km[$i];
                $price->to_km = $request->to_km[$i];
                $price->amount_usd = $amount;
                $price->amount_gel = $request->amount_gel[$i];
                $price->amount_rub = $request->amount_rub[$i];
                $price->created_at = date('Y-m-d H:i:s');
                $price->created_by = Session::get('admin.id');
                $price->save();

                $i++;
            }

            toastr()->success('Data has been saved successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/vehicles');
    }

    /**
     * Update image field
     *
     * @param  \App\Models\EmployeeTarget  $employeeTarget
     * @return \Illuminate\Http\Response
     */
    public function updateImageField($vehicleId, $imageName = "example") 
    {
        $vehicle = Vehicle::find($vehicleId);
        $vehicle->image = $imageName;
        $vehicle->save();
    }

    /**
     * Update image field
     *
     * @param  \App\Models\EmployeeTarget  $employeeTarget
     * @return \Illuminate\Http\Response
     */
    public function updateDriverImageField($driverId, $imageName = "example") 
    {
        $driver = Driver::find($driverId);
        $driver->image = $imageName;
        $driver->save();
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::with('driver')->find($id);

        return view('backend.vehicles.details_vehicle', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::with('driver')->find($id);
    	$vehicleClass = VehicleClass::all();

        $price = Price::where(['from_km'=>0, 'to_km'=>0, 'vehicle_id' => $id])->first();
        $prices = Price::where('from_km', '!=', 0)->where('vehicle_id', $id)->get();

        return view('backend.vehicles.edit_vehicle', compact('vehicle', 'vehicleClass', 'price', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            // driver update
            $driver = Driver::find($request->driver_id);
            $driver->driver_name = $request->driver_name;
            $driver->email = $request->email;
            $driver->language = implode(',', $request->language);
            $driver->description = $request->description;
            $driver->updated_at = date('Y-m-d H:i:s');
            $driver->save();
            #--- Image upload by Helper function ---#
            if( $request->file('driver_image') ) {
                $imageName = Helper::imageUpload('drivers', $driver->id, $request->driver_image);
                #--- update image field in database ---#
                $this->updateDriverImageField($driver->id, $imageName);
                #--- delete image from location ---#
                if($driver->image) {
                    Helper::deleteImage('drivers', $driver->image);
                }
            }
            // vehicle update
            $vehicle = Vehicle::find($request->vehicle_id);
            $vehicle->vehicle_name = $request->vehicle_name;
            $vehicle->vehicle_class_id = $request->vehicle_class_id;
            $vehicle->driver_id = $request->driver_id;
            $vehicle->registration_no = $request->registration_no;
            $vehicle->fuel_type = $request->fuel_type;
            $vehicle->seats = $request->seats;
            $vehicle->updated_at = date('Y-m-d H:i:s');
            $vehicle->save();
            #--- Image upload by Helper function ---#
            if( $request->file('vehicle_image') ) {
                $imageName = Helper::imageUpload('vehicles', $vehicle->id, $request->vehicle_image);
                #--- update image field in database ---#
                $this->updateImageField($vehicle->id, $imageName);
                #--- delete image from location ---#
                if($vehicle->image) {
                    Helper::deleteImage('vehicles', $vehicle->image);
                }
            }
            // price update
            $prices = Price::where('vehicle_id', $request->vehicle_id)->get();
            foreach ($prices as $value) {
                $result = Price::find($value->id)->delete();
            }

            $i = 0;
            foreach ($request->amount_usd as $amount) {
                $price = new Price;
                $price->vehicle_id = $request->vehicle_id;
                $price->from_km = $request->from_km[$i];
                $price->to_km = $request->to_km[$i];
                $price->amount_usd = $amount;
                $price->amount_gel = $request->amount_gel[$i];
                $price->amount_rub = $request->amount_rub[$i];
                $price->created_at = date('Y-m-d H:i:s');
                $price->updated_at = date('Y-m-d H:i:s');
                $price->created_by = Session::get('admin.id');
                $price->save();

                $i++;
            }
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        // driver delete
        $driver = Driver::find($vehicle->driver_id);
        if($driver->delete()) {
            if($driver->image)
                Helper::deleteImage('drivers', $driver->image);
        }
            

        // price delete
        $prices = Price::where('vehicle_id', $id)->get();
        foreach ($prices as $value) {
            $result = Price::find($value->id)->delete();
        }

        // vehicle delete
        if($vehicle->delete()) {
            if($vehicle->image)
                Helper::deleteImage('vehicles', $vehicle->image);
            return 1;
        } else
            return 0;
    }
}
