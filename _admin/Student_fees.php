<?php 
include_once("includes/header.php");
global $con;
$sql="select * from student order by st_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));

if($_REQUEST[fees_id])
global $con;
$fsql="Select *from fees order by fees_id";
$frs=mysqli_query($con,$fsql)or die(mysqli_error($con));
$fdata=mysqli_fetch_assoc($frs);
?>

<form action="lib/student.php" method="post" enctype="multipart/form-data" name="student_fees" id="student_fees">

<div style="position:relative;top:61.5px;">
    <table width="1505" id="stu-view-table">  	
	<tr><td colspan="5"><input type="button" value="Back" onclick="javascript:history.back();"/></td></tr>
	<tr class="stu-fees">
      <td width="60">NAME</td>
      <td width="80">FATHER</td>
      <td width="85">GENDER</td>
      <td width="129">COURSE</td>
	  <td width="129">ACTION</td>
    </tr>
	<?php
	while($data=mysqli_fetch_assoc($rs)){
	?>
	<tr class="stu-view-table-tr">
      <td width="60"><?=$data[st_name]?></td>
      <td width="80"><?=$data[st_father]?></td>
      <td width="85"><?=$data[st_gender]?></td>
      <td width="129"><?=get_single_value("course","course_id","course_name",$data[st_course])?></td>
	  <td width="125"><span><a href="fees_add.php?st_id=<?=$data[st_id]?>"><img src="images/fees-pay.png" class="logo-animate-fees"/></a></span><span><a href="fees_add.php?st_id=<?=$data[st_id]?>" ><img src="images/fees-pending.webp" class="logo-animate-fees" width="40px" height="35px" /></a></span><span><a href="Paid_fees_view.php"><img src="images/fees-detail.png" class="logo-animate-fees" width="30px" height="35px" /></a></span></td>
    </tr>
	<?php }?>
</table>
		<input type="hidden" name="st_id" value="<?= $data[st_id]?>"/>
</div>
</form>