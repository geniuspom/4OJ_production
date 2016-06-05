<?php

use App\Models\urllogin as urllogin;

/*$id = 31;
$id_card = '1709922873564';

//$password = urlencode($password);

//echo $password . "<br>";

$userlogin = urllogin::find($id);

$dbid_card = $userlogin->id_card;

if($id_card == $dbid_card){

  Auth::login($userlogin);

}else{
  echo "password wrong";
}*/

$id = 46;
$userlogin = urllogin::find($id);
Auth::login($userlogin);


?>
<!-- Bootstrap Core CSS -->
<link href="public/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
<!-- jQuery -->
<script src="public/bower_components/jquery/dist/jquery.min.js"></script>
<script src="public/js/jquery.confirm.js"></script>
<script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
  $(".confirm").confirm({
    text: "<p style='font-size:16px;text-align:center;'>ขอขอบคุณที่ให้ความสนใจที่จะร่วมงานนี้ <br> หากคุณได้รับเลือกให้เข้าทำงานนี้ บริษัทจะมีการ<span style='color:#f00'>ส่งอีเมลยืนยัน</span>ไปที่อีเมลของคุณ<br><br>คุณต้องการยืนยันที่จะยื่นขอทำงานนี้หรือไม่</p>",
    title: "ยืนยันการยื่นขอทำงาน",
    confirmButton: "ยืนยัน",
    cancelButton: "ยกเลิก",
    confirmButtonClass: "btn-success",
    cancelButtonClass: "btn-danger",
  });
});
</script>
<a href="../4oj/" class="confirm">Go to home</a>
