<?php
include("includes/header.php");
global $con;
$sql="select * from exams where exam_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<form action="lib/student.php" id="exam" name="exam" method="post" >
<div style="position:relative;top:60px;">	
	<table border="1px solid black" align="center">
		<tr>
			<th colspan="7" id="stu-heading"><input type="button" value="Back" onclick="javascript:history.back();"/></th>
		</tr>
		<tr>
			<th colspan="7" id="stu-heading">EXAM-VIEW</th>
		</tr>
		
		<tr bgcolor="#666666">
			<td>EXAM TITLE</td>
			<td>EXAM COURSE</td>
			<td>EXAM SUBJECT</td>
			<td>EXAM DATE</td>
			<td>EXAM SHIFT</td>
			<td>EXAM DESC</td>
			<td>ACTION</td>
		</tr>
		<?php
		while($data=mysqli_fetch_assoc($rs)){
		?>
		<tr>
		<td><?=$data[exam_title]?></td>
		<td><?=get_single_value("examcourse","ecourse_id","ecourse_name",$data[exam_course])?></td>
		<td><?=get_single_value("subject","subject_id","subject_name",$data[exam_subject])?></td>
		<td><?=$data[exam_date]?></td>
		<td><?=$data[exam_shift]?></td>
		<td><?=$data[exam_desc]?></td>
		<td><a href="javascript:exam_del(<?=$data[exam_id]?>)"><img src="images/del.ico"></a><a href="exam_add.php?exam_id=<?=$data[exam_id]?>"><img src="images/edit.jpg" width="38px" height="38px"></a></td>
		</tr>
		<?php } ?>
	</table>
	  <input type="hidden" name="exam_act" id="exam_act" />
	  <input type="hidden" name="exam_id" id="exam_id" value="<?=$data[exam_id]?>"/>
	</div>
</form>