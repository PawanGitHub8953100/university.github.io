<?php include("includes/header.php");
$sql="select * from student where st_id='$_REQUEST[st_id]'";
global $con;
$rs= mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="fees_view" id="fees_view" onsubmit="return valid_student(this);">

<div style="position:relative;top:62px;">
<table border="1" width="500" height="auto" align="center" class="fees-view">
<tr>
	 <td colspan="2" valign="top" id="stu-heading" style="text-align:center">FEES DETAILS</td>
</tr>
<tr>
	<td>STUDENT ID:</td>
	<td><?=$data[st_id]?></td>
</tr>
<tr>
	<td>Student Name:</td>
	<td><?=$data[st_name]?></td>
</tr>
<tr>
	<td>Father Name:</td>
	<td><?=$data[st_father]?></td>
</tr>
<tr>
	<td>Gender</td>
	<td><?=$data[st_gender]?></td>
</tr>
<tr>
	<td>Course:</td>
	<td><?=get_single_value("course","course_id","course_name",$data[st_course])?></td>
</tr>
  <tr>
	<td>Total:</td>
	<td><?=get_single_value("course","course_id","course_fees",$data[st_course])?></td>
</tr>
</table>
<table border="1" width="500" align="center" class="fees-view">
<tr>
<td>AMOUNT</td>
<td>BALANCE</td>
<td>DATE</td>
<td>DESCRIPTION</td>
</tr>
<?Php 
$sql="select *from fees where fees_st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
$amt=explode(",",$data[fees_amount]);
$bl=explode(",",$data[fees_balance]);
$dt=explode(",",$data[fees_date]);
$dsc=explode(",",$data[fees_desc]);
$adate=array();
$adsc=array();
$i=0;
foreach($dt as $d){
 $adate[$i]=$d;
 $i++;
}
$i=0;
 foreach($dsc as $ds){
 	$adsc[$i]=$ds;
	$i++;
 }
 $i=0;
 $sum=0;
 $am=$data['fees_total'];
 foreach($amt as $v){
 $sum+=$v;

?>
	<tr>
	<td><?=$v?></td>
	<td><?=($am-$sum)?></td>
	<td><?=$adate[$i]?></td>
	<td><?=$adsc[$i]?></td>	
	</tr>
	<?php $i++; }?>
	<tr>
	<td colspan="4">
		<div style="text-align:center;">
		<input type="button" value="back" onclick="javascript:history.back()">
		<input type="button" value="Print" onclick="javascript:printOut()">

		</div>
	</td>
	</tr>
	</table>
	</div>
</form>
