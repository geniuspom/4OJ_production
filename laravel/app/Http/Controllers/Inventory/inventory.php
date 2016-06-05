<?php
namespace App\Http\Controllers\Inventory;
use App\Http\Controllers\Controller;
use Request;

Class inventory extends Controller{

  public static function main($event_id){

      inventory::generate_html(inventoryManage::Get_DB($event_id));

  }

  public static function generate_html($data){

    $return_data = '<table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th class="text-center" style="width:2%">ลำดับที่</th>
                        <th class="text-left">รายการ</th>
                        <th class="text-center r-amt">Amt</th>
                        <th class="text-center r-OJ">OJ</th>
                        <th class="text-center r-sup">Sup</th>
                        <th class="text-center r-cut">Cus</th>
                        <th class="text-center r-receive">รับ</th>
                        <th class="text-center r-return">คืน</th>
                        <th class="text-left">Remark/Note</th>
                      </tr>
                    </thead>
                    <tbody>';

    if(count($data['inventory_amt']) == 0){

      for($i = 1; $i <= count($data['inventory_name']);$i++){
          $return_data .= '<tr>
                              <td class="text-center">'.$i.'</td>
                              <td>'. $data['inventory_name'][$i]['name'] .'</td>
                              <td class="r-amt"><input type="text" size="1" name="amt_all['.$i.']" value="0"></td>
                              <td class="r-OJ"><input type="text" size="1" name="amt_oj['.$i.']" value="0"></td>
                              <td class="r-sup"><input type="text" size="1" name="amt_sup['.$i.']" value="0"></td>
                              <td class="r-cut"><input type="text" size="1" name="amt_cus['.$i.']" value="0"></td>
                              <td class="r-receive"><input type="text" size="1" name="amt_receive['.$i.']" value="0"></td>
                              <td class="r-return"><input type="text" size="1" name="amt_return['.$i.']" value="0"></td>
                              <td>'. $data['inventory_name'][$i]['remark'] .'</td>
                          </tr>';
      }

    }else{

      for($i = 1; $i <= count($data['inventory_name']);$i++){
          $return_data .= '<tr>
                              <td class="text-center">'.$i.'</td>
                              <td>'. $data['inventory_name'][$i]['name'] .'</td>
                              <td class="r-amt"><input type="text" size="1" name="amt_all['.$i.']" value="'. $data['inventory_amt'][$i]['amt_all'] .'"></td>
                              <td class="r-OJ"><input type="text" size="1" name="amt_oj['.$i.']" value="'. $data['inventory_amt'][$i]['amt_oj'] .'"></td>
                              <td class="r-sup"><input type="text" size="1" name="amt_sup['.$i.']" value="'. $data['inventory_amt'][$i]['amt_sup'] .'"></td>
                              <td class="r-cut"><input type="text" size="1" name="amt_cus['.$i.']" value="'. $data['inventory_amt'][$i]['amt_cus'] .'"></td>
                              <td class="r-receive"><input type="text" size="1" name="amt_receive['.$i.']" value="'. $data['inventory_amt'][$i]['amt_receive'] .'"></td>
                              <td class="r-return"><input type="text" size="1" name="amt_return['.$i.']" value="'. $data['inventory_amt'][$i]['amt_return'] .'"></td>
                              <td>'. $data['inventory_name'][$i]['remark'] .'</td>
                          </tr>';
      }

    }

    $return_data .= '</tbody></table>';

    echo $return_data;

    //dd($data);


  }

}
