<?php
 include("includes/db_connect.php");
 include("includes/functions.php");
 
 if($_REQUEST[fac_id]){
 global $con;
  $sql="select * from faculity where fac_id='$_REQUEST[fac_id]'";
  $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
  $data=mysqli_fetch_assoc($rs);
 
 }
 ?>
<link rel="stylesheet" href="../_admin/css/faculityLogin.css"/>
<script src="js/validate.js"></script>

	<!--Number Validation -->
	<script>
	goods = "0123456789."; // onKeypress="goods='abcd'; return limitchar(event)"
	function limitchar(e) {
    var key, keychar;
    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();
    goods = goods.toLowerCase();
    if (goods.indexOf(keychar) != -1) {
        goods = "0123456789.";
        return true;
    }
    if (key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27) {
        goods = "0123456789.";
        return true;
    }
    return false;
}
</script>


<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
}
-->
</style>
  <form action="lib/faculity.php" method="post" enctype="multipart/form-data" name="fac_frm" id="fac_frm" onsubmit="return valid_faculity(this);">
    <div class="main-div">
      <table border="1" class="faculity-table">
        <tr>
          <th colspan="4"><div class="heading">FACULITY</div></th>
        </tr>
        <tr>
          <td width="205">NAME</td>
          <td width="286"><input type="text" id="fac_name" name="fac_name" value="<?=$data[fac_name]?>" onkeypress="goods='abcdefghijklmopqrstuvwxyz '" />
              <span id="fac-name"></span></td>
          <td width="284">QUALIFICATION</td>
          <td width="712"><textarea name="fac_qual" onkeypress="goods='0123456789/-'"><?=$data[fac_area]?>
      </textarea>
              <span id="fac-qual"></span></td>
        </tr>
        <tr>
          <td>DOB</td>
          <td><input type="text" name="fac_dob" id="fac_dob" value="<?=$data[fac_dob]?>" />
              <span id="fac-dob"></span></td>
          <td>EXPERIENCE</td>
          <td><textarea name="fac_exp" id="fac_exp"><?=$data[fac_exp]?>
      </textarea>
              <span id="fac-exp"></span></td>
        </tr>
        <tr>
          <td>PHONE</td>
          <td><input type="text" name="fac_phone" maxlength="10" onkeypress="goods='0123456789'" id="fac_phone"value="<?=$data[fac_phone]?>"/>
              <span id="fac-phone"></span></td>
          <td>AREA OF INTREST </td>
          <td><textarea name="fac_area" id="fac_area"><?=$data[fac_area]?>
      </textarea>
              <span id="fac-ar"></span></td>
        </tr>
        <tr>
          <td>CATEGORY</td>
          <td><select name="fac_cat" id="fac_cat" value="<?=$data[fac_cat]?>">
              <?=get_option_list("category","cat_id","cat_name",$data[fac_cat])?>
            </select>
              <span id="fac-cat"></span></td>
          <td>DESIGNATION</td>
          <td><select name="fac_desig" id="fac_desig" value="<?=$data[fac_desig]?>">
              <option value="0">Plz select</option>
              <option value="Profecor">Profecor</option>
              <option value="HOD">HOD</option>
              <option value="Lactural">Lactural</option>
              <option value="Assitant Profecor">Assitant Profecor</option>
            </select>
              <span id="fac-des"></span></td>
        </tr>
        <tr>
          <td>GENDER</td>
          <td><input name="fac_gender" id="fac_gender" type="radio" value="Male"<?php if($data[fac_gender]=="Male") echo"checked"; ?> />
            Male
            <input name="fac_gender" id="fac_gender" type="radio" value="Female" <?php if($data[fac_gender]=="Female") echo"checked"; ?>/>
            Female <span id="fac-gen"></span></td>
          <td>EMAIL </td>
          <td><input name="fac_email" type="email" id="fac_emial" value="<?=$data[fac_email]?>" />
              <span id="fac-email"></span></td>
        </tr>
        <tr>
          <td>ADDRESS</td>
          <td><textarea name="fac_address" id="fac_address"><?=$data[fac_address]?>
      </textarea>
              <span id="fac-add"></span></td>
          <td>PHD QUALIFIDE </td>
          <td><input name="fac_phd" type="radio" value="Yes" <?php if($data[fac_phd]=="Yes") echo"checked"; ?>/>
            Yes
            <input name="fac_phd" type="radio" value="No"<?php if($data[fac_phd]=="No") echo"checked"; ?> />
            No<span id="fac-phd"></span></td>
        </tr>
        <tr>
          <td>SECURITY QUESTION </td>
          <td><select name="fac_sec" id="fac_sec" >
              <?=get_option_list("security","security_id","security_question",$data[fac_sec])?>
            </select>
              <span id="fac-sec"></span></td>
          <td>ENTER ANSWER:</td>
          <td><input type="text" id="fac_ans" name="fac_ans" value="<?=$data[fac_ans]?>"/>
              <span id="fac-ans"></span></td>
        </tr>
        <tr>
          <td>NET QUALIFIDE</td>
          <td><input name="fac_net" id="fac_net" type="radio" value="Yes" <?php if($data[fac_net]=="Yes") echo"checked";?> />
            Yes
            <input name="fac_net" id="fac_net" type="radio" value="No"<?php if($data[fac_phd]=="No") echo"checked";?> />
            No<span id="fac-net"></span></td>
        
          <td>IMAGE</td>
		  <td><input type="file" name="fac_image" id="fac_image" value="<?=$data[fac_image]?>"/><span style="width:40px;height:40px;"><a href="fac_Uploads/<?=$data[fac_image]?>"><img src="fac_Uploads/<?=$data[fac_image]?>" width="40px" height="40px;"></a></span></td>
        </tr>
        <tr>
          <td colspan="4" align="center"><input type="submit" class="btn" name="Submit" value="Submit" />
              <input type="reset" name="reset" class="btn" value="Clear"/>
            <input type="button" class="btn" name="Back" value="Back" onclick="javascript:history.back();"/></td>
        </tr>
      </table>
      <input type="hidden" name="act" value="faculity_login"/>
	<input type="hidden" name="fac_id" value="<?=$data[fac_id]?>"/>
  
  </div>
  </form>
