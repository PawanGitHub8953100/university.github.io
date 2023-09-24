<?php
 include("includes/db_connect.php");
 include("includes/functions.php");
 
?>

<link rel="stylesheet" href="../_admin/css/forget_pass.css"/>
<form action="lib/faculity.php" method="post">

<div class="forgot-main_div">
	<div class="forgot-div-box">
		<div class="forgot-heading">Password Recovery</div>
		<div class="forgor-txt">User name:<input type="text" name="user_name" id="uner_name"/></div>
		<div class="forgor-txt">Security Question:<select id="sec_que" name="sec_que"><?=get_option_list("security","security_id","security_question")?></select></div>
		<div class="forgor-txt">Answer:<input type="text" name="sec_ans" id="sec_ans" /></div>
	
		<div class="btn"><input type="submit" id="btn-color" value="recovery"/>
	</div>
	<div class="back-btn"><input type="button" id="btn-color" value="Back" onclick="javascript:history.back();"/>
	</div> 
	<div style="position:relative;top:120px;left:20px;"><?= $_REQUEST['msg']?></div>
</div>
<input type="hidden" name="act" id="act" value="fac_Pass_Change"/>
</form>
<?php #}?>

