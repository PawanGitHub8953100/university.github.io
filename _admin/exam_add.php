<?php 
include("includes/header.php");

  if($_REQUEST[exam_id]){
  	global $con;
	$sql="select * from exams where exam_id='$_REQUEST[exam_id]'";
	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	$data=mysqli_fetch_assoc($rs);
  }  
?>
<form action="lib/student.php" id="form1" name="form1" method="post" onsubmit="return valid_exam(this);">
	<div style="position:relative;top:61.2px;">
	<table border="1px solid black" align="center" width="500px">
		<tr>
			<td colspan="2" align="center" id="stu-heading">EXAM</td>
		</tr>
		<tr>
			<td>EXAM TITLE:</td>
			<td><input type="text" id="exam_title" name="exam_title" value="<?=$data[exam_title]?>" /><spna id="e_title"></span></td>
		</tr>
		<tr>
			<td>EXAM COURSE</td>
			<td><select id="exam_course" name="exam_course" onchange="find_subject(this.value)">
				<?=get_option_list("examcourse","ecourse_id","ecourse_name",$data[exam_course])?>
			</select><spna id="e_course"></span></td>
		</tr>
		
		<tr>
			<td>EXAM SUBJECT:</td>
			<td><select id="exam_sub" name="exam_sub">
				
			</select><spna id="e_sub"></span></td>
		</tr>
		
		<tr>
			<td>EXAM DATE:</td>
			<td><input type="date" id="exam_date" name="exam_date" value="<?=$data[exam_date]?>"/><spna id="e_date"></span></td>
		</tr>
		
		<tr>
			<td>EXAM SHIFT</td>
			<td><input type="radio" name="exam_shift" id="exam_shift"  value="Morning(10:00 AM-01:00 PM)"  <?php if($data[exam_shift]=="Morning(10:00 AM-01:00 PM)") echo"checked"; ?> />Morning(1o:00 AM-01:00 PM)<br/><input type="radio" name="exam_shift" id="exam_shift" value="Evening(02:00 PM-05:00 PM)"  <?php if($data[exam_shift]=="Evening(02:00 PM-05:00 PM)") echo"checked"; ?>  />Evening(02:00 PM-05:00 PM)<spna id="e_shift"></span></td>
		</tr>
		
		<tr>
			<td>EXAM DESCRIPTION</td>
			<td><textarea id="exam_desc" name="exam_desc"><?=$data[exam_desc] ?></textarea><spna id="e_dsc"></span></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" id="exam_add" name="exam_add" value="SUBMIT" onclick="exam_add();"/>
			<input type="reset" value="Clear"/>
			<input type="button" value="Back" onclick="javascript:history.back();"/></td>
		</tr>
	</table>
	<input type="hidden" id="act" name="act" value="exam_view"/>
		<input type="hidden" id="exam_id" name="exam_id" value="<?=$data[exam_id]?>"/>
</div>
</form>
