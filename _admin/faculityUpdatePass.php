<?php
 include("includes/db_connect.php");
  	if(!isset($user)){
		header("updatePass.php?msg= User Not Exist!!");
	}else
?>
<link rel="stylesheet" href="../_admin/css/update_pass.css"/>
<form action="lib/faculity.php">
<div class="update-main-div">
<div><?=$_REQUEST['msg']?></div>
	<div class="update-box">
		<div class="update_heading">Update Password</div>
		<div class="update-form-div">
			Old Password: <input type="text" name="old_pss" id="old_pass"/>
		</div>
		<div class="update-form-div">
			Password: <input type="text" name="change_pss" id="change_pass"/>
		</div>
		<div class="update-form-div">	
			Confirm Password:<input type="text" name="conf_pass" id="conf_pass"/>
		</div>
		<div class="update-button">
		<input type="submit" id="update-btn-color" value="Change"></div>
		</div>
		<input type="hidden" name="act" value="fac_ChangePass"/>
</div>
</form>