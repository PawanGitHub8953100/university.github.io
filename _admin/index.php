<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="StyleSheet" href="CSS/index.css">
</head>
<body>
 <form action="lib/login.php" method="post">
 
 <div class="login-form">
 	<!--<img src="images/icon.png" id="user">-->
		<div class="login">
			<input type="text" id="user_name" autocomplete="off" name="user_name" placeholder="username"/>
		</div>
		<div class="login">
			<input type="password" name="user_pass" id="user_pass" placeholder="password"/>
		</div>
				<div class="login-type">
			Type:<select name="user_type" id="user_type">
			<option value="0">Plz Select</option>
			<option value="admin">Admin</option>
			<option value="faculity">Faculity</option>
			</select>
		</div>

		<div class="button">
			<input type="submit" id="button" value="Login"/>
			<input type="reset" id="button" value="Cancel"/>
		</div>
	</div>
	<div id="msg" ><?=$_REQUEST['msg']?></div>
	<div id="Admin-div"><a id="forget" href="../AdminPanal.php">Admin-Page</a></div>
	<div id="forget-div"><a id="forget" href="forgotPass.php">Forgot?</a></div>
	<div id="sign-div"><a id="sign" href="faculityLogin.php">Sigin</a></div>
	<input type="hidden" name="act" id="act" value="sig_in" />
 </form>
 </body>
</html>