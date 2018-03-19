<?php
    $key=$_GET['key'];
    $array = array();
    require 'connect.inc.php';
    $query=mysql_query("select * from notes where faculty LIKE '%$key%' OR subject LIKE '%$key%'");
    $query1=mysql_query("select * from notes where faculty LIKE '%$key%' OR subject LIKE '%$key%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['subject'];
    }
    while($row=mysql_fetch_assoc($query1))
    {
      $array[] = $row['faculty'];
    }
    echo strtoupper(json_encode($array));
?>
