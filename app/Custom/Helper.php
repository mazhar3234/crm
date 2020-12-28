<?php
/**
 *  Helper 	: Helper
 *  @author : Moazzam Hossain <en.moazzam@gmail.com>
 *  Created : 25 January, 2020
 */
namespace App\Custom;

use Illuminate\Support\Facades\Crypt;
use App\Models\Location;
use App\Models\Vehicle;
use App\Models\Price;
use Session;
use Image;

class Helper
{
    /**
     * Upload an image in given path
     *
     * @return (string) uploaded image name
     * @param $destination (string) folder name where the image upload
     * @param $id (int) inserted resources id
     * @param $source (file) image source
     * @param $height (int) height for resize image
     * @param $width (int) width for resize image
     */
    public static function imageUpload($destination, $id, $source = null, $height = null, $width = null)
    {
        $extension = $source->getClientOriginalExtension();
        $imageName = $id.'-'.time().substr($source, 16, 4).'.'.$extension;

        $image = Image::make($source);
        if(!empty($height))
            $image->resize($width,$height);
        $image->save(public_path().'/backend/images/'.$destination.'/'.$imageName);

        return $imageName;
    }

    /**
     * Delete an image from given path
     *
     * @param $source (string) folder name from where image delete
     * @param $imageName (string) database image name
     */
    public static function deleteImage($source = null, $imageName = null)
    {
        $path = public_path().'/backend/images/'.$source.'/'.$imageName;
        
        if( file_exists($path) )
            unlink($path);
    }

    /**
     * Make an image url for every resource
     *
     * @return (string)
     */
    public static function getImageUrl($location = null, $imageName = null)
    {
        return asset('backend/images/'.$location.'/'.$imageName);
    }

    /**
     * return vehicle price
     *
     * @return (string)
     */
    public static function getVehiclePrice($vehicleId = null)
    {
        return Price::where('vehicle_id', $vehicleId)->get();
    }

    /**
     * return account no
     *
     * @return (string)
     */
    public static function getLocation($fromlocationId = null, $tolocationId = null)
    {
        $fromLocation = Location::find($fromlocationId);
        $toLocation = Location::find($tolocationId);

        return "<b>From: </b> $fromLocation->location_name <b>To: </b> $toLocation->location_name <br>";
    }

    /**
     * return account no
     *
     * @return (string)
     */
    public static function getDistancePrice($vehicleId = null, $distance = null)
    {
        $price = Price::where('vehicle_id', $vehicleId)->where('from_km', '<=', $distance)
                        ->where('to_km', '>=', $distance)->first();
        
        if(empty($price)) {
            $price = Price::where('vehicle_id', $vehicleId)->where('from_km', 0)->first();
        }
        
        if(Session::get('currency') == 'usd')
            $amount = $price->amount_usd;
        elseif(Session::get('currency') == 'rub')
            $amount = $price->amount_rub;
        else
            $amount = $price->amount_gel;

        $totalPrice = ($amount * $distance);


        return $totalPrice;
    }

    public static function getInvoiceId()
    {
        return 'CC-'.time();
    }

    public static function getDriverId($vehicleId)
    {
        return Vehicle::find($vehicleId)->driver_id;
    }

    public static function getLocationId($locations = null)
    {
        $ids = array();
        foreach ($locations as $value) {
            $ids[] = Location::where('location_name', $value)->first()->id;
        }
        return implode(',', $ids);
    }

}