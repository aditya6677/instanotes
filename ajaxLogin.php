<?php
include("db.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=md5(mysqli_real_escape_string($db,$_POST['password']));

$result=mysqli_query($db,"SELECT uid FROM user WHERE username='$username' and password='$password'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($count==1)
{
$_SESSION['login_user']=$row['uid'];
echo $row['uid'];
}

}
?>
