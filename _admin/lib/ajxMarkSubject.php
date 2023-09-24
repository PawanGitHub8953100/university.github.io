<? include("../includes/db_connect.php");
	$s=$_REQUEST['s'];
	if(!empty($s)){
	global $con;
	$sql="select * from subject where subject_course='$s'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$subj="<option value='0'>PLEASE SELECT SUBJECT</option>";
	while($data=mysqli_fetch_assoc($rs)){
	$subj.="<option value=$data[subject_id]>$data[subject_name]</option>";	
	}	
	echo $subj;
}
?>