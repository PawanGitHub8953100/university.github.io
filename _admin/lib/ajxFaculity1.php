<?php include("../includes/db_connect.php");
global $con;
$rev=$_REQUEST['rev'];
	#if($value=="false"){
	if($rev){
	$sql="UPDATE `faculity` SET `fac_status`='false' WHERE `fac_id`='$rev'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	}
?>
<link rel="stylesheet" href="../_admin/css/faculityReq.css"/>
