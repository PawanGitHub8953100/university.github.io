<? include("../includes/db_connect.php");
	$q=$_REQUEST['q'];
	if(!empty($q)){
	global $con;
	$sql="select * from subject where subject_course='$q'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$sub="<option value='0'>PLEASE SELECT SUBJECT</option>";
	while($data=mysqli_fetch_assoc($rs)){
	$sub.="<option value=$data[subject_id]>$data[subject_name]</option>";	
	}	
	echo $sub;
}
?>