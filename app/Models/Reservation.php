<?php
/**
 * Model    : Reservation
 * @author  : Moazzam <en.moazzam@gmail.com>
 * Created  : 29 January, 2020
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function vehicle()
    {
    	return $this->belongsTo('App\Models\Vehicle');
    }

    public function driver()
    {
    	return $this->belongsTo('App\Model\Driver');
    }
}
