<?php
/**
 * Controller : Reservation
 * @author    : Moazzam <en.moazzam@gmail.com>
 * Created    : 25 January, 2020
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Session;
use Helper;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('backend.reservations.reservations', compact('reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);

        return view('backend.reservations.details_reservation', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $reservation = Reservation::find($id);

        return view('backend.reservations.print_reservation', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = reservation::find($id);

        return view('backend.reservations.edit_reservation', compact('reservation'));
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
            $reservation = reservation::find($request->reservation_id);
            $reservation->full_name = $request->full_name;
            $reservation->email = $request->email;
            $reservation->designation = $request->designation;
            $reservation->updated_at = date('Y-m-d H:i:s');
            $reservation->save();
            #--- Image upload by Helper function ---#
            if( $request->file('reservation_image') ) {
                $imageName = Helper::imageUpload('reservations', $reservation->id, $request->reservation_image);
                #--- update image field in database ---#
                $this->updateImageField($reservation->id, $imageName);
                #--- delete image from location ---#
                if($reservation->image) {
                    Helper::deleteImage('reservations', $reservation->image);
                }
            }
            
            toastr()->success('Data has been updated successfully.');
        } catch(\Exception $e) {
            toastr()->error('Failed! '.$e->getMessage());
        }

        return redirect('/reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = reservation::find($id);

        if($reservation->delete()) {
            if($reservation->image)
                Helper::deleteImage('reservations', $reservation->image);
            return 1;
        } else
            return 0;
    }
}
