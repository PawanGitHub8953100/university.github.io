<?php 
include("../includes/db_connect.php");
global $con;
$sql= "Select * from fees where fees_st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
 if($data[fees_balance]=="null"){
 	header("location:../Admit_card.php?st_id=$_REQUEST[st_id]");
 }else{
header("location:../fees_add.php?st_id=$_REQUEST[st_id]");
 	
 }
?>