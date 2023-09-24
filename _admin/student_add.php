<?php include_once("includes/header.php");
if($_REQUEST[st_id]){
  global $con;
  $sql="select * from student where st_id='$_REQUEST[st_id]'";
  $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
  $data=mysqli_fetch_assoc($rs);
 
}
?>
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="form_stu" id="form_stu" onsubmit="return valid_student(this);">
<div style="position:relative;top:58px;left:-02px;">
<table width="1508" border="1" id="table-middel">
  <tr>
    <td height="23" colspan="4" id="stu-marquee"><strong><marquee><h1 id="h1-assoc">UNIVERSITY PRAYAGRAJ</h1></marquee>
    </strong></td>
    </tr><tr>
    <td height="23" colspan="4" id="stu-h"><strong><h2 align="center" id="stu-heading">STUDENT REGISTRATION</h2>
    </strong></td>
    </tr>
  <tr>
    <td width="306">ENTER NAME: </td>
    <td width="314"><input name="st_name" id="st_name" type="text" maxlength="100" onkeypress="goods='abcdefghijklmnopqrstuvwxyz '; return limitchar(event)" value="<?=$data[st_name]?>"/>      &nbsp;<span id="s-name"></span></td>
    <td width="321">ENTER FATHER'S NAME: </td>
    <td width="507"><input name="st_father" id="st_father" type="text" onkeypress="goods='abcdefghijklmnopqrstuvwxyz. '; return limitchar(event)"  maxlength="100" value="<?=$data[st_father]?>"/> &nbsp;<span id="s-father"></span></td>
  </tr>
  <tr>
    <td>ENTER PHONE: </td>
    <td><input name="st_phone" id="st_phone" type="text" maxlength="10" onkeypress="goods='0123456789'; return limitchar(event)" value="<?=$data[st_phone]?>" /> &nbsp;<span id="s-phone"></span></td>
    <td>ENTER EMAIL: </td>
    <td><input name="st_email" id="st_email" type="text" maxlength="100" value="<?=$data[st_email]?>"/> &nbsp;<span id="s-email"></span></td>
  </tr>
  <tr>
    <td>SELECT GENDER: </td>
    <td><input name="st_gen" id="st_gen" type="radio" value="Male" <?php if($data[st_gender]=="Male") echo"checked"; ?>/>
      Male 
        <input name="st_gen" id="st_gen" type="radio" value="Female" <?php if($data[st_gender]=="Female") echo"checked";?>/>
      Female &nbsp;&nbsp;&nbsp;<span id="s-gen"></span></td>
    <td>SELECT QUALIFICATION: </td>
    <td><label><?= get_checkbox_list("qualification","quali_id","quali_name","st_qual[]",$data[st_qualification])?></label></td>
  </tr>
  <tr>
    <td>ENTER DOB: </td>
    <td><input type="date" value="<?=$data[st_dob]?>" id="st_dob" name="st_dob" />  &nbsp; &nbsp;<span id="s-dob"></span></td>
    <td>ENTER DOA(ADDMISSION): </td>
    <td><input type="date" id="st_doa" name="st_doa" value="<?=$data[st_doa]?>"/> &nbsp; &nbsp;<span id="s-doa"></span></td>
  </tr>
  <tr>
    <td>SELECT COURSE: </td>
    <td><select id="st_course" name="st_course">
      <?= get_option_list("course","course_id","course_name",$data[st_course])?>
    </select>      &nbsp; &nbsp;<span id="s-course"></span></td> 
    <td>SELECT CATEGORY: </td>
    <td><input id="st_cat" name="st_cat" type="radio" value="GEN"<?php if($data[st_category]=="GEN") echo"checked";?>/>
      GEN 
        <input id="st_cat" name="st_cat" type="radio" value="OBC"  <?php if($data[st_category]=="OBC") echo"checked";?>/>
      OBC 
      <input id="st_cat" name="st_cat" type="radio" value="SC"  <?php if($data[st_category]=="SC") echo"checked";?>/>
      SC
      <input id="st_cat" name="st_cat" type="radio" value="ST"  <?php if($data[st_category]=="ST") echo"checked";?>/>
      ST   &nbsp; &nbsp;<span id="s-cat"></span></td>
  </tr>
  <tr>
    <td>SELECT COUNTRY: </td>
    <td><select name="st_country" id="st_country" onchange="find_state(this.value)">
      <?= get_option_list("country","country_id","country_name",$data[st_country])?>
	  </select>  &nbsp; &nbsp;<span id="s-con"></span></td>
    <td>SELECT STATE: </td>
    <td><select name="st_state" id="st_state">
      <!--get_option_list("state","state_id","state_name",$data[st_state])-->
    </select>   &nbsp; &nbsp;<span id="s-state"></span>   </td>
  </tr>
  <tr>
    <td>ENTER PINCODE: </td>
    <td><input type="text" name="st_pin" id="st_pin" maxlength="6" onkeypress="goods='0123456789'; return limitchar(event)"  value="<?=$data[st_pincode]?>"/>  &nbsp; &nbsp;<span id="s-pin"></span></td>
	<td>SELECT IMAGE: </td>
    <td><input id="st_image" name="st_image" type="file" value="<?=$data[st_image]?>"/> <a href="uploads/<?=$data[st_image]?>"><img src="uploads/<?=$data[st_image]?>"  width="50px" height="50px"/></a> &nbsp;<span id="s-img"></span></td>
  </tr>
  <tr>
    <td>ENTER LOCAL ADDRESS: </td>
    <td><textarea  id="st_address1" name="st_address1"><?=$data[st_address1]?></textarea>  &nbsp; &nbsp;<span id="s-lcl"></span></td>
    <td>ENTER PERMANENT ADDRESS: </td>
    <td><textarea  id="st_address2" name="st_address2"><?=$data[st_address2]?></textarea>  &nbsp; &nbsp;<span id="s-prmnt"></span></td>
  </tr>
  <tr>
    <td colspan="4" id="stu-btn-td"><div align="center" >
      <input type="submit" id="act" name="act" value="SAVE_STUDENT"/>
      <input id="reset" name="reset" type="reset" value="ALL CLEAR" />
    </div></td>
    </tr>
</table>
  <input type="hidden" name="st_id" value="<?=$data[st_id]?>"/>
  <input type="hidden" name="st_image" value="<?=$data[st_image]?>"/>
</div>
</form>
<?php # include_once("includes/footer.php");?>
