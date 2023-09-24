<?php 
include("../includes/db_connect.php");
	$mt=$_REQUEST['t'];
	if(!empty($mt)){
	global $con;
	$sql="select * from subject where subject_id='$mt'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
   	$data=mysqli_fetch_assoc($rs);
	$res=$data[subject_total_mark];
	$pr=$data[subject_practical_mark];	
	$ans=array("$res","$pr");
	$myJSON=json_encode($ans);
	echo $myJSON;
	
	}
	?>