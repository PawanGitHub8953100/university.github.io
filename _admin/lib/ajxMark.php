<? include("../includes/db_connect.php");
	$val=$_REQUEST['val'];
	if(!empty($val)){
	global $con;
	$sql="select *from subject where subject_course='$val'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$sub="<option value='0'>PLZ SELECT SUBJECT</option>";
	while($data=mysqli_fetch_assoc($rs)){
	$sub.="<option value=$data[subject_id]>$data[subject_name]</option>";	
	}	
	echo $sub;
}
?>