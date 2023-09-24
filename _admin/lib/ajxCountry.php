<? include("../includes/db_connect.php");
	$q=$_REQUEST['q'];
	if(!empty($q)){
	global $con;
	$sql="select * from state where state_country='$q'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$country="<option value='0'>PLEASE SELECT STATE</option>";
	while($data=mysqli_fetch_assoc($rs)){
	$country.="<option value=$data[state_id]>$data[state_name]</option>";	
	}	
	echo $country;
}
?>