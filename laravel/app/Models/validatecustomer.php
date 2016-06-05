<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class validatecustomer extends Model {

    public static function validatecustomer($input){

    $rules = array(
        'name' => 'Required|Between:5,255|Unique:customer',
        'symbol' => 'Required',
        'address' => 'Required',
        'phone' => 'Required|Numeric',
    );

        return Validator::make($input, $rules);
    }

    public static function validateeditcustomer($input){

    $rules = array(
        'name' => 'Required|Between:5,255',
        'symbol' => 'Required',
        'address' => 'Required',
        'phone' => 'Required|Numeric',
    );

        return Validator::make($input, $rules);
    }

}
