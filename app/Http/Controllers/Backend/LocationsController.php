<?php
/**
 * Controller : Location
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Session;
use Helper;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();

        return view('backend.locations.locations', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.locations.create_location');
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
            $location = new Location;
            $location->location_name = $request->location_name;
            $location->location_name_rus = $request->location_name_rus;
            $location->created_at = date('Y-m-d H:i:s');
            $location->created_by = Session::get('admin.id');
            $location->save();
            
            toastr()->success('Data has been saved successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/locations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);

        return view('backend.locations.edit_location', compact('location'));
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
            $location = Location::find($request->location_id);
            $location->location_name = $request->location_name;
            $location->location_name_rus = $request->location_name_rus;
            $location->updated_at = date('Y-m-d H:i:s');
            $location->save();
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        
        if($location->delete()) {
            return 1;
        } else {
            return 0;
        }
    }
}
