<?php
/**
 * Controller : VehicleClass
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleClass;
use Session;
use Helper;

class VehicleClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleClass = VehicleClass::all();

        return view('backend.vehicle_class.vehicle_class', compact('vehicleClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vehicle_class.create_vehicle_class');
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
            $vehicleClass = new VehicleClass;
            $vehicleClass->class_name = $request->class_name;
            $vehicleClass->created_at = date('Y-m-d H:i:s');
            $vehicleClass->created_by = Session::get('admin.id');
            $vehicleClass->save();
            
            toastr()->success('Data has been saved successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/vehicle-class');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = VehicleClass::find($id);

        return view('backend.vehicle_class.edit_vehicle_class', compact('class'));
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
            $vehicleClass = VehicleClass::find($request->class_id);
            $vehicleClass->class_name = $request->class_name;
            $vehicleClass->updated_at = date('Y-m-d H:i:s');
            $vehicleClass->save();
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/vehicle-class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicleClass = VehicleClass::find($id);
        
        if($vehicleClass->delete()) {
            return 1;
        } else {
            return 0;
        }
    }
}
