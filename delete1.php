<?php
 require "config1.php";
 $id=$_REQUEST['id'];
 $delete="DELETE FROM `locker` WHERE `id`='$id'";
 $result=mysqli_query($con,$delete);
 header("location:detail1.php");
?>