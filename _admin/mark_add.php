<?php
include("includes/header.php");
include("includes/db_connect.php");

global $con;
$id=$_REQUEST[st_id];
$sql="select * from student where st_id='$id'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
$course=$data[st_course];
$esql="select *from exams where exam_course='$course'";
#print_r($esql);
$ers=mysqli_query($con,$esql)or die(mysqli_error($con));
$edata=mysqli_fetch_assoc($ers);
#print_r($edata);
?>
<link rel="stylesheet" href="css/mark_add.css"/>
<body onLoad="find_sub(<?=$edata[exam_course]?>)" id="mark_subj">
  <div style="position:relative;top:80px;" class="mark_msg"><?=$_REQUEST['msg']?></div>
<form action="lib/mark.php" method="post" enctype="multipart/form-data" >
<div class="mark_add_div">
  <table border="1" class="mark-table">
    <tr>
      <th colspan="2" scope="col" id="heading">MARK ADD </th>
    </tr>
    <tr>
      <td>NAME</td>
      <td><input type="text" name="mark_name" id="mark_name" value="<?=$data[st_name]?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>FATHER'S</td>
      <td><input type="text" name="mark_father" id="mark_father"  value="<?=$data[st_father]?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td>
	  <input type="radio" name="mark_gender" id="mark_gender" value="Male" <?php if($data[st_gender]=="Male") echo"checked"; ?> readonly="readonly">Male
	  <input type="radio" name="mark_gender" id="mark_gender" value="Female"<?php if($data[st_gender]=="Female") echo"checked";?> readonly="readonly">Female
    </td>
    </tr>
    <tr>
      <td>COURSE</td>
      <td><select name="mark_course" id="mark_course" readonly="readonly">
    	<?=get_option_list("course","course_id","course_name",$edata[exam_course])?>
      </select></td>
    </tr>
    <tr>
      <td>SUBJECT</td>
      <td><select name="mark_sub" id="mark_sub" onChange="total_mark(this.value)">

	    </select></td>
    </tr>
	
<tr>
      <td>TOTAL MARK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mark_total" id="mark_total" value="" style=" width:50px;text-align:center;" readonly="readonly"/></td>
	   <td>OBTAINED MARK 
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="mark_obtain" id="mark_obtain" style=" width:50px;text-align:center;"/></td>
    </tr>
    
    <tr>
      <td>TOTAL PRACTICAL
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="mark_prac" id="mark_prac" value="" style=" width:50px;text-align:center;" readonly="readonly"/></td>
	  
	  <td>OBTAIN PRACTICAL 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="obt_prac" id="obt_prac" value="" style=" width:50px;text-align:center;"/></td>
    </tr>
	    <tr>
      <td>DATE</td>
      <td><input type="date"  name="mark_date" id="mark_date"  /></td>
    </tr>
    <tr>
      <td>DESCRIPTION</td>
      <td><textarea  name="mark_desc" id="mark_desc" ></textarea></td>
    </tr>
	 <tr>
      
      <td colspan="2"align="center"><input type="submit" id="sub-btn" value="Submit" /><input id="res-btn" type="button" value="Back" id="back-btn" onClick="javascript:history.back();" /></td>
    </tr>
  </table>
  </div>
    <input type="hidden" name="st_id" value="<?=$data[st_id]?>"/>
</form>

</body>
