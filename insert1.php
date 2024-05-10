<?php
include "config1.php";
$fullname=$_REQUEST['fullname'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$address=$_REQUEST['address'];
$occuption=$_REQUEST['occuption'];
$locker=$_REQUEST['locker'];
$prilocker=$_REQUEST['prilocker'];
$key=$_REQUEST['key'];
$nominee=$_REQUEST['nominee'];
$relnominee=$_REQUEST['relnominee'];
$aadhar=$_REQUEST['aadhar'];

$insert="INSERT INTO `locker`(`fullname`,`email`,`mobile`,`adderss`,`occuption`,`locker`,`prilocker`,`key`,`nominee`,`relnominee`,`aadhar`) values ('$fullname','$email','$mobile','$address','$occuption','$locker','$prilocker','$key','$nominee','$relnominee','$aadhar')";
/*echo $insert;
die;*/
$result=mysqli_query($con,$insert);
if($result==true)
{
	header("location:locker.php");
}
else
{
	echo"not";
}
?>
