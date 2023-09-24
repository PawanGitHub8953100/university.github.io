<?php
session_start();
include("../Admin_Includes/Admin_db_connect.php"); 
#######Login Submit Calling ##########
if($_REQUEST['act']=="sign_in")
{
user_login();
}
	
if($_REQUEST['act']=="logout")
{
user_logout();
}
if($_REQUEST['act1']=="forgot_rec")
{
forgot_recovery();
}
	
	
function user_login(){
global $acon;
$sql="select * from student where st_name = '$_REQUEST[user_name]' and st_dob = '$_REQUEST[user_dob]'";
$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
$data=mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
$_SESSION['user_id']=$data[st_id];
header("location:../studentZone.php?msg=$_REQUEST[user_name]");
}else{
header("location:../AdminPanalStudentZone.php?msg=plz enter correct info.!!");
 }
}

function user_logout(){
if(isset($_SESSION['user_id'])){
$_SESSION['user_id']="";
session_destroy();
header("location:../AdminPanalStudentZone.php?msg=Logged Out!!");
}
}

?>