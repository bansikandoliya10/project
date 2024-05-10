<?php
include"config1.php";
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

$update="update `locker` SET `fullname`='$fullname',`email`='$email=',`mobile`='$mobile',`address`='$address',`occuption`='$occuption',`locker`='$locker',`prilocker`='$prilocker',`key`='$key',`nominee`='$nominee',`relnominee`='$relnominee',`aadhar`='$aadhar'";
$result = mysqli_query($con,$update);
header("location:detail1.php");
?>

