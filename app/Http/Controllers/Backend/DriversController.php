<?php
/**
 * Controller : Driver
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use Session;
use Helper;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();

        return view('backend.drivers.drivers', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.drivers.create_driver');
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
            $driver = new Driver;
            $driver->driver_name = $request->driver_name;
            $driver->email = $request->email;
            $driver->mobile_no = $request->mobile_no;
            $driver->language = implode(',', $request->language);
            $driver->description = $request->description;
            $driver->created_at = date('Y-m-d H:i:s');
            $driver->created_by = Session::get('admin.id');
            
            if($driver->save()) {
                #--- Image upload by Helper function ---#
                if($request->driver_image) {
                    $imageName = Helper::imageUpload('drivers', $driver->id, $request->driver_image);
                    #--- update image field in database ---#
                    $this->updateImageField($driver->id, $imageName); 
                }
            }
            toastr()->success('Data has been saved successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/drivers');
    }

    /**
     * Update image field
     *
     * @param  \App\Models\EmployeeTarget  $employeeTarget
     * @return \Illuminate\Http\Response
     */
    public function updateImageField($driverId, $imageName = "example") 
    {
        $driver = Driver::find($driverId);
        $driver->image = $imageName;
        $driver->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);

        return view('backend.drivers.edit_driver', compact('driver'));
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
            $driver = Driver::find($request->driver_id);
            $driver->driver_name = $request->driver_name;
            $driver->email = $request->email;
            $driver->mobile_no = $request->mobile_no;
            $driver->language = implode(',', $request->language);
            $driver->description = $request->description;
            $driver->updated_at = date('Y-m-d H:i:s');
            $driver->save();
            #--- Image upload by Helper function ---#
            if( $request->file('driver_image') ) {
                $imageName = Helper::imageUpload('drivers', $driver->id, $request->driver_image);
                #--- update image field in database ---#
                $this->updateImageField($driver->id, $imageName);
                #--- delete image from location ---#
                if($driver->image) {
                    Helper::deleteImage('drivers', $driver->image);
                }
            }
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/drivers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);

        if($driver->delete()) {
            if($driver->image) {
                Helper::deleteImage('drivers', $driver->image);
            }
            
            return 1;
        } else {
            return 0;
        }
    }
}
