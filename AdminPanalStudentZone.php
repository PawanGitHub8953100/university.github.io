<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Admin_css/AdminStudentZone.css"/>
<body>
<form action="Admin_lib/Admin_login.php" method="post">	
	<div class="login-form">
		<div class="login">
			<input type="text" id="user_name" autocomplete="on" name="user_name" placeholder="username"/>		
			<input type="password" name="user_dob" id="user_dob" placeholder="date-of-birth"/>
		</div>
		<div class="button">
			<input type="submit" id="button"  value="Login"/>
			<input type="reset" id="button" value="Cancel"/>
			<!--<input type="button" id="button" value="Back" onClick="javascript:history.back();"/>-->
		</div>
		<div id="admin-ank"><a href="AdminPanal.php" >Admin-Page</a></div>
		<div id="all-msg" ><?=$_REQUEST['msg']?></div>
	<div  id="forget"><a href="_admin/forgotPass.php">froget?</a></div>
</div>
<input type="hidden" name="act" value="sign_in"/>
</form>
</body>
<html>
