<?php
/**
 * Controller : Home
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ReservationEmail;
use Illuminate\Http\Request;
use App\Models\VehicleClass;
use App\Models\Reservation;
use App\Models\Location;
use App\Models\Vehicle;
use App\Models\Driver;
use Session;
use Helper;
use Input;
use Mail;
use DB;
class HomeController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::has('currency')) {
            Session::put('language', 'english');
            Session::put('currency', 'gel');
        }
        $locations = Location::all();

        if(Session::get('language') == 'russian')
           return view('frontend.russian.index', compact('locations'));
        else
    	   return view('frontend.index', compact('locations'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tour()
    {
    	        if(!Session::has('currency')) {
            Session::put('language', 'english');
            Session::put('currency', 'gel');
        }
        $locations = Location::all();

        if(Session::get('language') == 'russian')
           return view('frontend.russian.tour', compact('locations'));
        else
           return view('frontend.tour', compact('locations'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
    	   if(!Session::has('currency')) {
            Session::put('language', 'english');
            Session::put('currency', 'gel');
        }
        $locations = Location::all();
$info=DB::table('contact_info')->where('info_id',1)->first();
        if(Session::get('language') == 'russian')
           return view('frontend.russian.contact', compact('locations','info'));
        else
           return view('frontend.contact', compact('locations','info'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addLocation($locationId = null)
    {
        $locations = Location::all();

        return view('frontend.location', compact('locations', 'locationId'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vehicles($distance = null, $sortBy = null)
    {
        $vehicleClass = VehicleClass::all();
        $vehicles = $this->getFilterVehicle($sortBy);
        $distance = round($distance/1000);
        Session::put('reservation.distance', $distance);

        return view('frontend.cars', compact('vehicleClass', 'vehicles', 'distance'));
    }

    public function getFilterVehicle($sortBy = null)
    {
        if(!empty($sortBy) && $sortBy != 'null') {
            $vehicles = 'sort';
        }
        else {
            $vehicles = Vehicle::all();
        }

        return $vehicles;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDistance($froms = null, $tos = null)
    {
        $source = urlencode(rtrim($froms, "|"));
        $destination = urlencode(rtrim($tos, "|"));

        $ch = curl_init("https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$source."&destinations=".$destination."&mode=driving&language=en-US&key=AIzaSyBFD1YqGRU5QpB-OEUPWRR37mTF0STh97k");

        $result = curl_exec($ch);
        curl_close($ch);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setVehicle($vehicleId = null)
    {
        Session::put('reservation.vehicle_id', $vehicleId);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservation(Request $request)
    {
        $vehicleId = Session::get('reservation.vehicle_id');
        $distance = Session::get('reservation.distance');
        $amount = Helper::getDistancePrice($vehicleId, $distance);

        $reservation = new Reservation();
        $reservation->invoice_id = Helper::getInvoiceId();
        $reservation->vehicle_id = $vehicleId;
        $reservation->driver_id = Helper::getDriverId($vehicleId);
        $reservation->from_location_id = Helper::getLocationId($request->from_location);
        $reservation->to_location_id = Helper::getLocationId($request->to_location);
        $reservation->reservation_date = $request->date;
        $reservation->reservation_time = $request->time;
        $reservation->distance = $distance;
        $reservation->duration = $request->duration;
        $reservation->usd_amount = $amount;
        $reservation->amount = $amount;
        $reservation->currency = 'GEL';
        $reservation->client_name = $request->first_name;
        $reservation->last_name = $request->last_name;
        $reservation->mobile_no = $request->mobile_no;
        $reservation->email = $request->email;
        $reservation->pickup_address = $request->pickup_address;
        $reservation->dropoff_address = $request->dropof_address;
        $reservation->comment = $request->comment;
        $reservation->created_at = date('Y-m-d H:i:s');

        $reservation->save();

        $this->sendMailToDriver($request, $reservation);

        return view('frontend.message');
    }

    public function sendMailToDriver($data, $reservation)
    {
        try {
            $driver = Driver::find($reservation->driver_id);
            $vehicle = Vehicle::find($reservation->vehicle_id);

            $data->invoice_id = $reservation->invoice_id;
            $data->account = $reservation->id;
            $data->distance = $reservation->distance;
            $data->amount = $reservation->amount;
            $data->currency = $reservation->currency;
            $data->from_location_id = $reservation->from_location_id;
            $data->to_location_id = $reservation->to_location_id;
            $data->vehicle = $vehicle;

            Mail::to($driver->email)->send(new ReservationEmail($data));
        } catch (Exception $e) {
            return true;
        }
    }

    public function setCurrency($currency = null)
    {
        Session::put('currency', $currency);

        return back();
    }

    public function setLanguage($language = null)
    {
        Session::put('language', $language);

        return back();
    }

}

