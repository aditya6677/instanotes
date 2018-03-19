<?php

$con_error='Couldnt connect';

$mysql_host='localhost';
$mysql_user='aditya76';
$mysql_password='';
$mysql_db='instanotes';

if(@!mysql_connect($mysql_host,$mysql_user,$mysql_password)||@!(mysql_select_db($mysql_db)))
{
  echo mysql_error();
}
else {
  //echo 'Connected!';
}



 ?>
