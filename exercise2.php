<?php
if (!empty ($_SERVER['HTTP_CLIENT_ID'])) {
  $ip_address= $_SERVER ['HTTP_CLIENT_ID'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip_address= $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else {
   $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;

 ?>
