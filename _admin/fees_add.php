<?php
include("includes/header.php");
global $con;
$sql="select * from student where st_id='$_REQUEST[st_id]'";
$rs= mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);

?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="student_fees" id="student_fees" onsubmit="return fees_add(this);">
	<div class="fees-add-div" style="position:relative;top:60px;">
	  <table width="500" id="fees_add_table" name="fees_add_table" border="1">  	
	  <tr>
      <th colspan="2"><h2> FEES ADD<h2></th>
	  </tr>
	 <tr>
      <td>ID</td>
	  <td><input type="text" value="<?=$data[st_id]?>" name="st_fees_id" readonly="readonly"/></td>
	  </tr>
     <tr>
      <td>NAME:</td>
	  <td><input type="text" value="<?=$data[st_name]?>" name="st_fees_name" readonly="readonly"/></td>
	  </tr>
	   <tr>
      <td>FATHER:</td>
	  <td><input type="text" value="<?=$data[st_father]?>" name="st_fees_father" readonly="readonly"/></td>
	  </tr>
	   <tr>
      <td>GENDER:</td>
	  <td><input type="text" value="<?=$data[st_gender]?>" name="st_fees_gender" readonly="readonly"/></td>
	  </tr>
	   <tr>
      <td>COURSE:</td>
	  <td><input type="text" name="st_fees_course" value="<?=get_single_value("course","course_id","course_name",$data['st_course'])?>" readonly="readonly"></td>
	  </tr>
	   <tr>
      <td>TOTAL:</td>
	  <?php
	  if($total=get_single_value("fees","fees_st_id","fees_balance",$data['st_id'])){
	  $val=1;
	  }else{
	  	$total=get_single_value("course","course_id","course_fees",$data['st_course']);
		$val=0;
	  }
	  ?>
	   <td><input type="text" value="<?=$total?>" name="st_fees_total" id="st_fees_total" readonly="readonly" /></td>
	  </tr>
	    <tr>
      <td>FEES AMOUNT:</td>
	  <td><input type="text" id="st_fees_amount" name="st_fees_amount" value="<?=get_single_value("fees","fees_id","fees_amount",$data[fees_amount])?>"/></td>
	  </tr>
	  
	  <td>FEES DATE:</td>
	  <td><input type="text" id="st_fees_date" name="st_fees_date" readonly="readonly" value="<?=date("d-m-y")?>"/></td>
	  </tr>
	  <td>FEES DIESCRIPTION:</td>
	  <td><textarea id="st_fees_desc" name="st_fees_desc" ><?=$data[fees_desc]?></textarea></td>
	  </tr>
	   <td colspan="2" align="center"><input name="button" type="button" onclick="javascript:history.back()" value="Back" />
	     <input type="submit" name="fees_act" id="fees_act" <?=($total=='null')?"disabled":"" ?> value="SUBMIT" onclick="fees_add();"/></td>
	   </tr>
	</table>
		<input type="hidden" name="act" value="fees_save"/>
		<input type="hidden" name="act2" value="<?=$val?>"/>
		<input type="hidden" name="st_id" value="<?= $data[st_id]?>"/>
	</div>  
	</form>