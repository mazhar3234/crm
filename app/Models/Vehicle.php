<?php
/**
 * Model    : Vehicle
 * @author  : Moazzam <en.moazzam@gmail.com>
 * Created  : 27 January, 2020
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function vehicleClass()
    {
    	return $this->belongsTo('App\Models\VehicleClass');
    }

    public function driver()
    {
    	return $this->belongsTo('App\Models\Driver');
    }

    public function price()
    {
    	return $this->hasMany('App\Models\Price');
    }
}
