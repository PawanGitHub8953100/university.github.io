<?php include("../includes/db_connect.php");
	global $con;
	$value=$_REQUEST['value'];
	if($value){
	global $con;
	$sql="UPDATE `faculity` SET `fac_status`='true' WHERE `fac_id`='$value'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	}
?>
<link rel="stylesheet" href="../_admin/css/faculityReq.css"/>
