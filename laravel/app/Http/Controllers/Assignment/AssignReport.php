<?php
namespace App\Http\Controllers\Assignment;
use App\Http\Controllers\Controller;
//use App\Models\Database\Assignment as Assignment;
use App\Models\Database\user as user;

//use Illuminate\Support\Facades\Redirect;
//use Route;
use Request;

Class AssignReport extends Controller{

  public static function main(){

    $year = Request::input('year');

    $start = $year."-01-01";
    $end = $year."-12-31";
    $user = user::get();

    $returndata = '<table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">ชื่อ</th>
                    <th class="text-center">จำนวนครั้งที่ได้รับมอบหมาย</th>
                  </tr>
                </thead>
                <tbody>';

    $i = 1;
    $assignall = 0;

    foreach($user as $record){
        $userid = $record->id;
        $fullname = $record->nickname . " - " . $record->name . " " . $record->surname;

        $assign = user::find($userid)->assignbetween($start,$end)->count();
        $assignall += intval($assign);

        $returndata .= '<tr>
                        <td class="text-center">'. $i .'</td>
                        <td>'. $fullname .'</td>
                        <td class="text-center">'. $assign .'</td>
                        </tr>';

        $i++;

    }

    $returndata .= '<tr>
                    <td colspan="2" class="text-center">รวม</td>
                    <td class="text-center">'. $assignall .'</td>
                    </tr></tbody>
                </table>';

    echo $returndata;

  }

  public static function getyear(){

    $today = date("Y");

    $returndata = '<select name="filter_year" id="filter_year" class="form-control">';

    for($y = 2016 ; $y <= $today ; $y++){
        $returndata .= '<option value="'.$y.'" ';

        if($y == $today){
            $returndata .= 'selected="selected" ';
        }

        $returndata .= '>'.$y.'</option>';
    }

    $returndata .= '</select>';

    echo $returndata;

  }

}
