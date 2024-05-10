<?php
include "config1.php";
$id=$_REQUEST['id'];
$sql="select * from `locke` where `id`='$id'";
$result= mysqli_query($con, $sql);
$data=mysqli_fetch_assoc($result);
?>
