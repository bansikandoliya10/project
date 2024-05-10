<?php
include"config1.php";
$sql="SELECT * FROM `locker`";
$result=mysqli_query($con,$sql);
?>

<html>
<body>
	<h2 align="center"> registration datails </h2>
	<table align="center" border="1px solid">
	<tr>
    <th> id </th>   
    <th> fullname </th>
    <th> email </th>
    <th> mobile </th>
    <th> address </th>
    <th> occuption </th>
    <th> locker </th>
    <th> prilocker </th>
    <th> key </th>
    <th> nominee </th>
    <th> relnominee </th>
    <th> aadhar </th>


		</tr>
	<?php
		while($data=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
		<td><?php echo $data ['id'];?></td>
		<td><?php echo $data ['fullname'];?></td>
		<td><?php echo $data ['email'];?></td>
		<td><?php echo $data ['mobile'];?></td>
        <td><?php echo $data ['address'];?></td>
        <td><?php echo $data ['occuption'];?></td>
		<td><?php echo $data ['locker'];?></td>
		<td><?php echo $data ['prilocker'];?></td>
		<td><?php echo $data ['key'];?></td>
        <td><?php echo $data ['nominee'];?></td>
		<td><?php echo $data ['relnominee'];?></td>
		<td><?php echo $data ['aadhar'];?></td>	
		</tr>
		<?php
		}
		?>
		</table>
		</body>
		</html>
		