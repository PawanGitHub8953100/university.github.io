<?php 
include("../includes/db_connect.php");
global $con;
$sql= "Select * from student";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){

header("location:../mark_view.php?st_id=$_REQUEST[st_id]");
	}
 }
?>