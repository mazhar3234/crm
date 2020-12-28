<?php
/**
 * Controller : Auth
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\User;
use App\Models\Location;
use Session;
use Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('admin.id'))
            return redirect('/dashboard');

    	return view('backend.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authentication(Request $request)
    {
        $credential = ['username' => $request->username, 'password' => $request->password];
        
        if( Auth::guard('admin')->attempt($credential) ) {
            Session::put('admin', Auth::guard('admin')->user());

            toastr()->success('Welcome to crm dashboard!');
            return redirect('/dashboard');
        }

        toastr()->warning('These credentials do not match our records!');
    	return redirect('/admin');
    }

    /**
     * Destory user session
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::forget('admin');
        toastr()->success('You are successfully logout!');

        return redirect('/admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $users = User::all()->count();
        $reservations = Reservation::all()->count();
        $vehicles = Vehicle::all()->count();
        $drivers = Driver::all()->count();
        $locations = Location::all()->count();

    	return view('backend.dashboard', compact('users', 'reservations', 'vehicles', 'drivers','locations'));
    }
}
