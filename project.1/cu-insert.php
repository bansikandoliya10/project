<?php
include "cu-config.php";

$aadhaarnumber=$_REQUEST['aadhaarnumber'];
$fullname=$_REQUEST['fullname'];
$gender=$_REQUEST['gender'];
$business=$_REQUEST['business'];
$constitution=$_REQUEST['Constitution'];
$turnover=$_REQUEST['turnover'];
$address=$_REQUEST['address'];
$date=$_REQUEST['date'];
$Mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$pan=$_REQUEST['pan'];
$state=$_REQUEST['state'];
$district=$_REQUEST['district'];
$branch=$_REQUEST['branch'];
$photo=$_REQUEST['photo'];
$adharcard=$_REQUEST['adharcard'];



$insert="INSERT INTO `info`(`aadhaarnumber`,`fullname`,`gender`,`business`,`constitution`,`adderss`,`date`,`mobile`,`email`,`pan`,`state`,`district`,`branch`,`photo`,`adharcard`)values('$aadhaarnumber','$fullname','$business','$constitution','$turnover','$address','$date','$mobile','$email','$pan','$state','$district','$branch','$photo','$adharcard')";

/*echo $insert;
die;*/

$result=mysqli_query($con,$insert);

if($result == true)
{
	//header("location:saving.php");
}
else 
{
	//echo "not";
}
?>
