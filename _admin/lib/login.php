<?php
session_start();
include("../includes/db_connect.php");
global $con;

$sql="select * from login";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
$log_user=$data[loin_user];
$user=md5($_REQUEST[user_name]);
$type=$data[login_type];


$fsql="select * from faculity";
$frs=mysqli_query($con,$fsql)or die(mysqli_error($con));
$fdata=mysqli_fetch_assoc($frs);
$ftype=$fdata[fac_type];


$user_type=$_REQUEST['user_type'];


#######Login Submit Calling ##########


if($_REQUEST['act']=="sig_in"){
				if($type==$user_type){			
					user_login();
					}else if($ftype==$user_type){
						faculity_login();
					}else{	
				header("location:../index.php?msg=Your Type selected wrong !!");	
		}
}
############----Log--out----###########################
if($_REQUEST['act']=="logout")
{
user_logout();
st_logout();

}
if($_REQUEST['act']=="logout_fac")
{
fac_logout();
}

#########################
if($_REQUEST['act']=="forgot_rec")
{
recovery_pass();
}

if($_REQUEST['act']=="ChangePass")
{
change_pass();
}


function user_login(){
global $con;
$user=md5($_REQUEST[user_name]);
$pass=md5($_REQUEST[user_pass]);

$sql="select * from login where login_user='$user' and login_pass = '$pass'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
$_SESSION['login_user']=$_REQUEST['user_name'];
header("location:../student_view.php?msg=Login SuccessFull!!");
}else{
header("location:../index.php?msg=Please Try Login!!");
 }
}


#########------------Recovery-----Password----------------####################################
 function recovery_pass(){
 global $con;
 $sql="select * from login";
 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
 $data=mysqli_fetch_assoc($rs);

$user=md5($_REQUEST['user_name']);
$security=md5($_REQUEST['sec_que']);
$answer=md5($_REQUEST['sec_ans']);

 if($data[login_user]==$user){
 	 	if($data[login_sec_id]==$security){
	 			if($data[login_ans]==$answer){
					header("location:../updatePass.php?msg=$user"); 	
				}else{
					header("location:../forgotPass.php?msg=PLz Enter Correct Answer!");
				}
			}else{
			 header("location:../forgotPass.php?msg=Wrong selection!");
			}
	}else{
  	header("location:../forgotPass.php?msg=Plz correct Enter!");
 	}
}
 
##############------------Change Password----------################
  function change_pass(){
 	global $con;
		$new_pass=md5($_REQUEST['change_pss']);
		$conf_pass=md5($_REQUEST['conf_pass']);
	if($new_pass==$conf_pass){
	 $sql="UPDATE `login` SET `login_pass`='$conf_pass'";
	 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	 if($rs){	
		header("location:../index.php?msg=Password Change Sucessfull!!");	
		}else{
			header("location:../updatePass.php?msg=Password Change Unsucessfull!!");	
		}
	}else{
	header("location:../updatePass.php?msg= Confirm Pass not Same");
	}
}
#####################---Log out----#################
function user_logout(){
if(isset($_SESSION['login_user'])){
$_SESSION['login_user']="";
session_destroy();
header("location:../index.php?msg=Logged Out!!");
}
}

function fac_logout(){
if(isset($_SESSION['fac_id'])){
$_SESSION['fac_id']="";
session_destroy();
header("location:../index.php?msg=Logged Out!!");
}
}

function st_logout(){
if(isset($_SESSION['user_id'])){
$_SESSION['user_id']="";
session_destroy();
header("location:../../AdminPanalStudentZone.php?msg=Logged Out!!");
}
}

#############################################################################################################
#######Faculity Submit Calling ##########
if($_REQUEST['act']=="faculity_login")
{
faculityReg();
}
################### Faculity Delete########
if($_REQUEST['fac_act']=="Delete_faculity"){
Delete_faculity();	
}
#######Faculity Login Calling##########
if($_REQUEST['msg']=="fac_loin()")
{
faculityLogin();
}

###############-------------Faculity--Registration---------###############################
function faculityReg(){
global $con;
$R=$_REQUEST;
$sql="INSERT INTO `university`.`faculity`(`fac_name` ,`fac_dob` ,`fac_phone` ,`fac_gender` ,`fac_qual` ,`fac_cat` ,`fac_address` ,`fac_exp`,`fac_area`,`fac_desig`,`fac_email`,`fac_phd`,`fac_net`,`fac_type`,`fac_status`,`fac_sec`,`fac_ans`)VALUES('$R[fac_name]','$R[fac_dob]','$R[fac_phone]','$R[fac_gender]','$R[fac_qual]','$R[fac_cat]','$R[fac_address]','$R[fac_exp]','$R[fac_area]','$R[fac_desig]','$R[fac_email]','$R[fac_phd]','$R[fac_net]','faculity','false','$R[fac_sec]','$R[fac_ans]')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
echo"<div class='msg-div-data'><p>Sucessfull!<br>Please Wait 24 hour's<br><div class='ank-div'><a id='ank' href='../index.php'>Back</a></p></div></div>";
	}
}



#################----------Delete Function-----------------###################
	 function Delete_faculity(){
	 global $con;
	 $sql="delete from faculity where fac_id='$_REQUEST[fac_id]'";
	 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	 $msg="Record is Delete Sucessfull!";
	 if($rs){
	 header("location:../faculityReq.php?msg=$msg");
	 }
 }

 
############--Faculity--login--##########
function faculity_login(){
global $con;
$user=$_REQUEST[user_name];
$pass=md5($_REQUEST[user_pass]);

$sql="select * from faculity where fac_name='$user' and fac_pass='$pass'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
$_SESSION['fac_id']=$data[fac_id];

header("location:../faculityZone.php?msg=$_SESSION[fac_id]");
}else{
header("location:../index.php?msg=Please Try Login!!");
 }
}
?>
