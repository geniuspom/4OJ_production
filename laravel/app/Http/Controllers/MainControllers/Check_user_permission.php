<?php
namespace App\Http\Controllers\MainControllers;
use App\Http\Controllers\Controller;

use Auth;

Class Check_user_permission extends Controller{

    public static function check_user($allow_user){

      $status = false;

      if(!empty(Auth::user())){

        $userid = Auth::user()->id;

        foreach($allow_user as $record){

          if($userid == $record){

            $status = true;

          }

        }

          return $status;

      }else{

        return $status;

      }


    }

}
