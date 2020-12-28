<?php
/**
 * Model    : Price
 * @author  : Moazzam <en.moazzam@gmail.com>
 * Created  : 29 January, 2020
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function vehicle()
    {
    	return $this->belongsTo('App\Models\Vehicle');
    }
}
