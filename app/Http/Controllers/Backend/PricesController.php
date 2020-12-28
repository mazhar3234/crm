<?php
/**
 * Controller : Prices
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 29 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Price;
use Session;
use Helper;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::where(['from_km'=>0, 'to_km'=>0])->get();

        return view('backend.prices.prices', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all();

        return view('backend.prices.create_price', compact('vehicles'));
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
            $i = 0;
            foreach ($request->amount as $amount) {
                $price = new Price;
                $price->vehicle_id = $request->vehicle_id;
                $price->from_km = $request->from_km[$i];
                $price->to_km = $request->to_km[$i];
                $price->amount = $amount;
                $price->created_at = date('Y-m-d H:i:s');
                $price->created_by = Session::get('admin.id');
                $price->save();

                $i++;
            }
            
            toastr()->success('Data has been saved successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/prices');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($vehicleId)
    {
        $vehicles = Vehicle::all();
        $price = Price::where(['from_km'=>0, 'to_km'=>0, 'vehicle_id'=>$vehicleId])->first();
        $prices = Price::where('from_km', '!=', 0)->where('vehicle_id', $vehicleId)->get();

        return view('backend.prices.edit_price', compact('price', 'prices', 'vehicles'));
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
            $i = 0;
            $this->destroy($request->vehicle_id);
            
            foreach ($request->amount as $amount) {
                $price = new Price;
                $price->vehicle_id = $request->vehicle_id;
                $price->from_km = $request->from_km[$i];
                $price->to_km = $request->to_km[$i];
                $price->amount = $amount;
                $price->created_at = date('Y-m-d H:i:s');
                $price->created_by = Session::get('admin.id');
                $price->save();

                $i++;
            }
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/prices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicleId)
    {
        $prices = Price::where('vehicle_id', $vehicleId)->get();
        foreach ($prices as $value) {
            $result = Price::find($value->id)->delete();
        }
        
        if($result) {
            return 1;
        } else {
            return 0;
        }
    }
}
